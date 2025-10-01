<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Carbon\Carbon;
use Goutte\Client;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function checkLatestModifiesOnStocks()
    {
        $client = new Client();

        $url = 'https://m.bvb.ro/FinancialInstruments/Markets/Shares';

        $crawler = $client->request('GET', $url);

        $crawler->filter('#gv tbody tr')->each(function ($node) {
            $symbol = $node->filter('td')->eq(0)->filter('b')->text();
            $isin = $node->filter('td')->eq(0)->filter('p')->text();

            $company = $node->filter('td')->eq(1)->text();
            $price = str_replace(',', '.', $node->filter('td')->eq(2)->text());
            $price = (float)$price;
            $change = str_replace(',', '.', $node->filter('td')->eq(3)->text());
            $change = (float)$change;
            $date = Carbon::createFromFormat('d.m.Y H:i', $node->filter('td')->eq(4)->text())->format('Y-m-d H:i:s');
            $category = $node->filter('td')->eq(5)->text();

            Stock::firstOrCreate(
                [
                    'symbol' => $symbol,
                    'isin' => $isin,
                    'company' => $company,
                    'price' => $price,
                    'change' => $change,
                    'date' => $date,
                    'category' => $category
                ],
                [
                    'is_active' => true
                ]
            );
        });
    }

    public function getLastStocksData() {
        return Stock::orderBy('change', 'desc')
            ->limit(100)
            ->get()
            ->map(function($stock) {
                $stock->date = Carbon::parse($stock->date)->format('Y-m-d H:i');
                return $stock;
            });
    }

    public function updateStatus(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);

        $stock->is_active = !$stock->is_active;
        $stock->save();

        return redirect()->route('home');
    }
}
