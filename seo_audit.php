<?php

// URL-ul țintă
$url = 'https://alcapasoftware.com';

// 1. Crawl simplu pagină: Titlu, meta description, linkuri interne
function crawlPage($url) {
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    $xpath = new DOMXPath($dom);

    // Titlu
    $title = $dom->getElementsByTagName('title')->item(0)->nodeValue ?? '';

    // Meta tags
    $metaDesc = '';
    $metaKeywords = '';
    $robots = '';
    $canonical = '';
    $ogTitle = '';
    $ogDescription = '';

    foreach ($dom->getElementsByTagName('meta') as $meta) {
        $name = strtolower($meta->getAttribute('name'));
        $property = strtolower($meta->getAttribute('property'));
        $httpEquiv = strtolower($meta->getAttribute('http-equiv'));

        if ($name == 'description') {
            $metaDesc = $meta->getAttribute('content');
        }
        if ($name == 'keywords') {
            $metaKeywords = $meta->getAttribute('content');
        }
        if ($name == 'robots' || $httpEquiv == 'x-robots-tag') {
            $robots = $meta->getAttribute('content');
        }
        if ($property == 'og:title') {
            $ogTitle = $meta->getAttribute('content');
        }
        if ($property == 'og:description') {
            $ogDescription = $meta->getAttribute('content');
        }
    }

    // Link rel canonical
    foreach ($dom->getElementsByTagName('link') as $link) {
        if (strtolower($link->getAttribute('rel')) == 'canonical') {
            $canonical = $link->getAttribute('href');
        }
    }

    // H1, H2, H3
    $h1s = $dom->getElementsByTagName('h1');
    $h2s = $dom->getElementsByTagName('h2');
    $h3s = $dom->getElementsByTagName('h3');

    $h1 = $h1s->length > 0 ? trim($h1s->item(0)->nodeValue) : '';
    $h2 = $h2s->length > 0 ? trim($h2s->item(0)->nodeValue) : '';
    $h3 = $h3s->length > 0 ? trim($h3s->item(0)->nodeValue) : '';

    // Imagini + fără ALT
    $images = $dom->getElementsByTagName('img');
    $imgCount = $images->length;
    $imagesMissingAlt = 0;
    foreach ($images as $img) {
        if (!$img->hasAttribute('alt') || trim($img->getAttribute('alt')) == '') {
            $imagesMissingAlt++;
        }
    }

    // Linkuri interne și externe
    $internalLinks = [];
    $externalLinks = [];
    $host = parse_url($url, PHP_URL_HOST);
    foreach ($dom->getElementsByTagName('a') as $a) {
        $href = trim($a->getAttribute('href'));
        if (!$href || preg_match('#^(mailto:|tel:|javascript:)#i', $href)) continue;

        $parsed = parse_url($href);
        if (isset($parsed['host']) && $parsed['host'] === $host) {
            $internalLinks[] = $href;
        } elseif (!isset($parsed['host']) && strpos($href, '/') === 0) {
            $internalLinks[] = $href;
        } elseif (isset($parsed['host'])) {
            $externalLinks[] = $href;
        }
    }

    // Favicon
    $favicon = '';
    foreach ($dom->getElementsByTagName('link') as $link) {
        if (strpos($link->getAttribute('rel'), 'icon') !== false) {
            $favicon = $link->getAttribute('href');
            break;
        }
    }

    return [
        'title' => $title,
        'meta_description' => $metaDesc,
        'meta_keywords' => $metaKeywords,
        'robots' => $robots,
        'canonical' => $canonical,
        'og_title' => $ogTitle,
        'og_description' => $ogDescription,
        'h1' => $h1,
        'h2' => $h2,
        'h3' => $h3,
        'images_count' => $imgCount,
        'images_missing_alt' => $imagesMissingAlt,
        'internal_links' => array_unique($internalLinks),
        'external_links' => array_unique($externalLinks),
        'favicon' => $favicon,
    ];
}

// 2. Backlinks simplu: scraping OpenLinkProfiler (exemplu limitat)
function getBacklinks($domain) {
    $url = 'https://www.openlinkprofiler.org/?site=' . urlencode($domain);
    $html = file_get_contents($url);

    // Simplu parsare regex pentru extragere câteva backlinkuri - exemplu minimal
    preg_match_all('#<a href="([^"]+)"[^>]*class="link-url"[^>]*>([^<]+)</a>#', $html, $matches);

    $backlinks = [];
    if (!empty($matches[1])) {
        foreach ($matches[1] as $i => $link) {
            $backlinks[] = [
                'url' => $link,
                'text' => $matches[2][$i],
            ];
            if (count($backlinks) >= 10) break;
        }
    }
    return $backlinks;
}

// 3. PageSpeed Insights API call
function getPageSpeedScore($url, $strategy = 'desktop') {
    $apiKey = 'AIzaSyCOMRTXYQ0bxc4zcOP_uEune3XzYlbKPYM'; // pune aici cheia ta API

    $apiUrl = "https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=" . urlencode($url) . "&strategy=$strategy&key=$apiKey";

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if (!isset($data['lighthouseResult'])) {
        return null;
    }

    $result = [];

    $categories = $data['lighthouseResult']['categories'];
    $result['performance_score'] = $categories['performance']['score'] * 100;

    $audits = $data['lighthouseResult']['audits'];

    $metrics = [
        'first-contentful-paint',
        'largest-contentful-paint',
        'cumulative-layout-shift',
        'interactive',
    ];

    foreach ($metrics as $metric) {
        if (isset($audits[$metric])) {
            $value = $audits[$metric]['displayValue'] ?? '';
            $result[$metric] = $value;
        }
    }

    return $result;
}

// 4. Verifică robots.txt și sitemap.xml
function checkRobotsAndSitemap($url) {
    $parsed = parse_url($url);
    $baseUrl = $parsed['scheme'] . '://' . $parsed['host'];

    $robotsUrl = $baseUrl . '/robots.txt';
    $sitemapUrl = $baseUrl . '/sitemap.xml';

    $robotsExists = @file_get_contents($robotsUrl) !== false;
    $sitemapExists = @file_get_contents($sitemapUrl) !== false;

    return [
        'robots' => $robotsExists,
        'sitemap' => $sitemapExists
    ];
}

// -- Execuție --

$domain = parse_url($url, PHP_URL_HOST);
$crawlData = crawlPage($url);
$backlinks = getBacklinks($domain);
$pagespeedScore = getPageSpeedScore($url);
$checks = checkRobotsAndSitemap($url);

echo "=== SEO Crawl Data ===\n";
echo "Title: {$crawlData['title']}\n";
echo "Meta Description: {$crawlData['meta_description']}\n";
echo "Meta Keywords: {$crawlData['meta_keywords']}\n";
echo "Canonical: {$crawlData['canonical']}\n";
echo "OG Title: {$crawlData['og_title']}\n";
echo "OG Description: {$crawlData['og_description']}\n";
echo "H1: {$crawlData['h1']}\n";
echo "Images Count: {$crawlData['images_count']}\n";
echo "Internal Links: " . count($crawlData['internal_links']) . "\n\n";

echo "=== Backlinks (max 10) ===\n";
foreach ($backlinks as $bl) {
    echo "- {$bl['url']} ({$bl['text']})\n";
}
echo "\n";

if ($pagespeedScore) {
    echo "=== PageSpeed Insights Details ===\n";
    echo "Performance Score: " . $pagespeedScore['performance_score'] . "/100\n";
    echo "First Contentful Paint: " . ($pagespeedScore['first-contentful-paint'] ?? 'N/A') . "\n";
    echo "Largest Contentful Paint: " . ($pagespeedScore['largest-contentful-paint'] ?? 'N/A') . "\n";
    echo "Cumulative Layout Shift: " . ($pagespeedScore['cumulative-layout-shift'] ?? 'N/A') . "\n";
    echo "Time to Interactive: " . ($pagespeedScore['interactive'] ?? 'N/A') . "\n";
} else {
    echo "PageSpeed Details: N/A\n";
}

echo "\n=== Robots.txt & Sitemap.xml ===\n";
echo "robots.txt: " . ($checks['robots'] ? 'FOUND' : 'NOT FOUND') . "\n";
echo "sitemap.xml: " . ($checks['sitemap'] ? 'FOUND' : 'NOT FOUND') . "\n";


?>