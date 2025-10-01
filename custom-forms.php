<?php

function my_custom_form_shortcode() {
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template de Lucru - Workshop SOSTAC Technova</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
        <style>
            @media print {
                .no-print { display: none !important; }
                .print-break { page-break-inside: avoid; }
                .container { max-width: none; }
            }

            .gradient-bg {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .section-header {
                background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
            }

            .question-box {
                background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
                border-left: 4px solid #f59e0b;
            }

            .example-box {
                background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
                border-left: 4px solid #3b82f6;
            }

            textarea, input[type="text"], input[type="email"], input[type="tel"] {
                border: 2px solid #e5e7eb;
                transition: border-color 0.3s ease;
            }

            textarea:focus, input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus {
                border-color: #3b82f6;
                outline: none;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }

            .icon-bg {
                background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            }

            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border-radius: 4px;
                border: 1px solid transparent;
            }
            .alert-success {
                background-color: #dff0d8;
                color: #3c763d;
                border-color: #d6e9c6;
            }
            .alert-danger {
                background-color: #f2dede;
                color: #a94442;
                border-color: #ebccd1;
            }
        </style>
    </head>
    <form method="post" id="formularMarcel">
        <div class="bg-gray-50 text-gray-800">
            <div class="container mx-auto px-4 py-8 max-w-4xl">

                <div class="alert alert-success" style="display: none;">Datele au fost salvate cu succes.</div>
                <div class="alert alert-danger" style="display: none;">A apărut o eroare la salvare.</div>

                <!-- Header -->
                <div class="gradient-bg text-white p-8 rounded-lg mb-8 text-center">
                    <div class="flex justify-center items-center mb-4">
                        <div class="bg-white text-blue-600 p-3 rounded-lg mr-4">
                            <i class="fas fa-chart-line text-2xl"></i>
                        </div>
                        <h1 class="text-3xl font-bold">Workshop SOSTAC</h1>
                    </div>
                    <h2 class="text-xl mb-2">Template de Lucru pentru Technova</h2>
                    <p class="text-blue-100">Planificare Strategică Marketing pentru Pompe de Căldură și Instalații Termice</p>
                    <p class="text-sm text-blue-200 mt-4">Facilitat de MDA Digital</p>
                </div>

                <!-- Info Client -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-building text-blue-600 mr-2"></i>
                        Informații Workshop
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Participant:</label>
                            <input type="text" class="w-full p-2 rounded-md" name="client" placeholder="Numele participantului" value="">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Data Workshop:</label>
                            <input type="date" class="w-full p-2 rounded-md" name="data_workshop" placeholder="dd/mm/yyyy">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Facilitator:</label>
                            <input type="text" class="w-full p-2 rounded-md" name="facilitator" placeholder="Numele facilitatorului" value="MDA Digital">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Participanți:</label>
                        <textarea class="w-full p-2 rounded-md h-20" name="participanti" placeholder="Lista participanților (nume, funcție, departament)"></textarea>
                    </div>
                </div>

                <!-- Ce este SOSTAC -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                        Ce este SOSTAC?
                    </h3>
                    <div class="bg-blue-50 p-4 rounded-lg mb-4">
                        <p class="text-gray-700 mb-3">
                            <strong>SOSTAC®️</strong> este un framework de planificare strategică dezvoltat de PR Smith, format din 6 componente:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <ul class="space-y-2 text-sm">
                                    <li><strong>S</strong>ituation - Unde suntem acum?</li>
                                    <li><strong>O</strong>bjectives - Unde vrem să ajungem?</li>
                                    <li><strong>S</strong>trategy - Cum ajungem acolo?</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="space-y-2 text-sm">
                                    <li><strong>T</strong>actics - Detaliile strategiei</li>
                                    <li><strong>A</strong>ctions - Planul de implementare</li>
                                    <li><strong>C</strong>ontrol - Măsurarea progresului</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-green-800 mb-2">Beneficii SOSTAC pentru Technova:</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <div>✓ Aliniere echipă tehnică</div>
                            <div>✓ Claritate strategică</div>
                            <div>✓ Execuție coerentă</div>
                            <div>✓ Rezultate măsurabile</div>
                        </div>
                    </div>
                </div>

                <!-- 1. SITUATION ANALYSIS -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-search mr-3"></i>
                            1. SITUATION ANALYSIS - Unde suntem acum?
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Întrebări Provocatoare -->
                        <div class="question-box p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                Întrebări Esențiale pentru Technova:
                            </h4>
                            <ul class="space-y-2 text-sm">
                                <li>• <strong>Piața:</strong> Cum arată piața de pompe de căldură în România în 2025? Care sunt trendurile?</li>
                                <li>• <strong>Poziția:</strong> Care este cota de piață actuală a Technova? Cum ne percep clienții?</li>
                                <li>• <strong>Competiția:</strong> Cine sunt principalii 5 competitori? Ce fac ei diferit?</li>
                                <li>• <strong>Provocări:</strong> Ce ne împiedică să creștem mai repede? Care sunt punctele noastre slabe?</li>
                                <li>• <strong>Oportunități:</strong> Ce schimbări din piață ne-ar putea avantaja în următorii 2 ani?</li>
                            </ul>
                        </div>

                        <!-- Analiză Clienți -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-users text-blue-500 mr-2"></i>
                                Analiză Clienți (Cine? Cum? De ce?)
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemplu pentru Technova:</p>
                                <p class="text-sm">Clienți actuali: instalatori certificați (60%), dezvoltatori imobiliari (25%), persoane fizice cu case (15%). Comportament: caută soluții tehnice complete, influențați de preț și garanție, preferă comunicarea directă cu specialiștii.</p>
                            </div>
                            <textarea class="w-full p-3 rounded-md h-32" name="analiza_clienti" placeholder="Descrieți clienții actuali, comportamentul lor, motivațiile de cumpărare, canalele preferate de comunicare..."></textarea>
                        </div>

                        <!-- Analiză Companie -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-building text-green-500 mr-2"></i>
                                Analiză Companie (Forțe & Slăbiciuni)
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Puncte Forte:</label>
                                    <textarea class="w-full p-3 rounded-md h-24" name="analiza_clienti_puncte_forte" placeholder="Ex: 29 ani experiență, 40% cotă piață cupru, parteneri europeni certificați..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Puncte Slabe:</label>
                                    <textarea class="w-full p-3 rounded-md h-24" name="analiza_clienti_puncte_slabe" placeholder="Ex: prezența digitală limitată, dependența de vânzări directe..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Analiză PESTEL -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-globe text-purple-500 mr-2"></i>
                                Analiză PESTEL pentru Industria Pompelor de Căldură
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemple specifice pentru Technova:</p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <p><strong>Politic:</strong> Casa Eficientă, subvenții UE pentru renovări</p>
                                        <p><strong>Economic:</strong> Creșterea prețurilor energiei, inflație</p>
                                        <p><strong>Social:</strong> Conștientizare ecologică, case inteligente</p>
                                    </div>
                                    <div>
                                        <p><strong>Tehnologic:</strong> Pompe de căldură hibride, IoT</p>
                                        <p><strong>Ecologic:</strong> Reducere emisii CO2, EU Green Deal</p>
                                        <p><strong>Legal:</strong> Directiva EU renovări, certificare energetică</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <textarea class="w-full p-3 rounded-md h-32" name="analiza_pestel_factori_1" placeholder="Factori Politici, Economici, Sociali care influențează business-ul..."></textarea>
                                </div>
                                <div>
                                    <textarea class="w-full p-3 rounded-md h-32" name="analiza_pestel_factori_2" placeholder="Factori Tehnologici, Ecologici, Legali relevanți..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Analiză Competitori -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-chart-bar text-red-500 mr-2"></i>
                                Analiză Competitori
                            </h4>
                            <div class="question-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-amber-800 font-medium mb-2">Întrebări Cheie:</p>
                                <ul class="text-sm space-y-1">
                                    <li>• Cine sunt top 3 competitori direcți pentru pompe de căldură?</li>
                                    <li>• Ce strategii de marketing folosesc? Unde sunt vizibili?</li>
                                    <li>• Care sunt punctele lor slabe pe care le putem exploata?</li>
                                    <li>• Cum comunică cu clienții? Ce mesaje folosesc?</li>
                                </ul>
                            </div>
                            <textarea class="w-full p-3 rounded-md h-32" name="analiza_competitori1" placeholder="Competitor 1: Nume, poziționare, avantaje, slăbiciuni, strategii observate..."></textarea>
                            <textarea class="w-full p-3 rounded-md h-32 mt-3" name="analiza_competitori2" placeholder="Competitor 2: Nume, poziționare, avantaje, slăbiciuni, strategii observate..."></textarea>
                            <textarea class="w-full p-3 rounded-md h-32 mt-3" name="analiza_competitori3" placeholder="Competitor 3: Nume, poziționare, avantaje, slăbiciuni, strategii observate..."></textarea>
                        </div>

                        <!-- Concluzii Situation -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Concluzii Cheie - Situation Analysis:</h4>
                            <textarea class="w-full p-3 rounded-md h-24" name="concluzii_cheie" placeholder="Cele mai importante 3-5 concluzii din analiza situației actuale..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- 2. OBJECTIVES -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-target mr-3"></i>
                            2. OBJECTIVES - Unde vrem să ajungem?
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Întrebări Provocatoare -->
                        <div class="question-box p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                Întrebări Strategice pentru Technova:
                            </h4>
                            <ul class="space-y-2 text-sm">
                                <li>• <strong>Viziune:</strong> Unde vrem să fie Technova în 12 luni? Care este visul nostru?</li>
                                <li>• <strong>Prioritatea #1:</strong> Care este cel mai important obiectiv pentru pompe de căldură?</li>
                                <li>• <strong>Măsurare:</strong> Ce metrici ne-ar face să știm că am reușit?</li>
                                <li>• <strong>Resurse:</strong> Cât suntem dispuși să investim pentru aceste obiective?</li>
                                <li>• <strong>Timeline:</strong> Ce vrem să realizăm în primele 90 de zile?</li>
                            </ul>
                        </div>

                        <!-- Obiective SMART Cantitative -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-chart-line text-blue-500 mr-2"></i>
                                Obiective SMART Cantitative
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemple pentru Technova:</p>
                                <ul class="text-sm space-y-1">
                                    <li>• Creșterea vânzărilor de pompe de căldură cu 35% în 12 luni</li>
                                    <li>• Generarea a 150 de lead-uri calificate/lună din digital</li>
                                    <li>• Creșterea cotei de piață cu 2 puncte procentuale</li>
                                    <li>• Atingerea unui ROI de 4:1 pe campaniile digitale</li>
                                </ul>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Vânzări/Profit:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="vanzari_profit" placeholder="Ex: Creștere vânzări cu X%, ROI de X:1..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Cota de piață/Clienți:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="cota_de_piata" placeholder="Ex: +X% cotă piață, X clienți noi/lună..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Obiective SMART Calitative -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-heart text-red-500 mr-2"></i>
                                Obiective SMART Calitative
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Brand Awareness:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="brand_awarness" placeholder="Ex: Recunoaștere brand 60% în target, top of mind..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Satisfacția clienților:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="satisfactia_clientilor" placeholder="Ex: NPS >70, rating Google 4.8+..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Prioritizarea Obiectivelor -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Prioritizarea Obiectivelor (1-5, 1=cel mai important):</h4>
                            <textarea class="w-full p-3 rounded-md h-24" name="prioritizarea_obiectivelor" placeholder="Listați obiectivele în ordinea priorității și justificați de ce această ordine..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- 3. STRATEGY -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-chess mr-3"></i>
                            3. STRATEGY - Cum ajungem acolo?
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Întrebări Provocatoare -->
                        <div class="question-box p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                Întrebări Strategice Esențiale:
                            </h4>
                            <ul class="space-y-2 text-sm">
                                <li>• <strong>Diferențierea:</strong> Prin ce este Technova unică față de competitori?</li>
                                <li>• <strong>Focusul:</strong> Pe ce segment de clienți ne concentrăm primul?</li>
                                <li>• <strong>Mesajul:</strong> Care este mesajul central care rezonează cu clienții?</li>
                                <li>• <strong>Canalele:</strong> Unde întâlnim cel mai eficient clienții potențiali?</li>
                                <li>• <strong>Parteneriatele:</strong> Cu cine ne-ar ajuta să colaborăm?</li>
                            </ul>
                        </div>

                        <!-- Segmente Țintă -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-bullseye text-green-500 mr-2"></i>
                                Segmente Țintă
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemplu pentru Technova:</p>
                                <p class="text-sm">Segment Principal: Proprietari case individuale, urban/suburban, venituri peste medie, vârsta 35-55 ani, preocupați de costuri energetice și sustenabilitate</p>
                            </div>
                                           <textarea class="w-full p-3 rounded-md h-32" name="segmente_tinta" placeholder="Descrieți segmentele țintă principale: demografie, geografie, comportament, nevoi..."></textarea>
                        </div>

                        <!-- Poziționare -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-map-marker-alt text-purple-500 mr-2"></i>
                                Poziționare
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemplu pentru Technova:</p>
                                <p class="text-sm">"Technova - Partenerul de încredere pentru soluții complete de încălzire durabilă. 29 de ani de experiență, tehnologie europeană certificată, suport tehnic specializat."</p>
                            </div>
                            <textarea class="w-full p-3 rounded-md h-24" name="pozitionare" placeholder="Cum vrem să fim percepuți în piață? Care este poziționarea unică?"></textarea>
                        </div>

                        <!-- Propunerea de Valoare -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-gem text-yellow-500 mr-2"></i>
                                Propunerea de Valoare Unică
                            </h4>
                            <textarea class="w-full p-3 rounded-md h-32" name="propunerea_de_valoare_unica" placeholder="De ce să aleagă clienții Technova? Care sunt beneficiile unice pe care le oferim?"></textarea>
                        </div>

                        <!-- Parteneriate -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-handshake text-blue-500 mr-2"></i>
                                Parteneriate Strategice
                            </h4>
                            <textarea class="w-full p-3 rounded-md h-24" name="parteneriate_strategice" placeholder="Cu cine ar trebui să colaborăm? Instalatori, dezvoltatori, influenceri, alte companii..."></textarea>
                        </div>

                        <!-- Rezumat Strategie -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Rezumatul Strategiei (1-2 paragrafe):</h4>
                            <textarea class="w-full p-3 rounded-md h-32" name="rezumatul_strategiei" placeholder="Rezumați strategia generală în câteva propoziții clare..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- 4. TACTICS -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-cogs mr-3"></i>
                            4. TACTICS - Detaliile strategiei
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Întrebări Provocatoare -->
                        <div class="question-box p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                Întrebări Tactice Concrete:
                            </h4>
                            <ul class="space-y-2 text-sm">
                                <li>• <strong>Digital:</strong> Ce campanii digitale specifice vor genera cele mai multe lead-uri?</li>
                                <li>• <strong>Conținut:</strong> Ce tip de conținut educațional vor găsi util clienții?</li>
                                <li>• <strong>Canale:</strong> Pe ce platforme sunt activi clienții noștri țintă?</li>
                                <li>• <strong>Buget:</strong> Cum împărțim bugetul între diferitele canale?</li>
                                <li>• <strong>Timeline:</strong> Care campanii lansăm primul și de ce?</li>
                            </ul>
                        </div>

                        <!-- Marketing Digital -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-laptop text-blue-500 mr-2"></i>
                                Marketing Digital
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemple pentru Technova:</p>
                                <ul class="text-sm space-y-1">
                                    <li>• <strong>SEO:</strong> "pompe de căldură preț", "încălzire ecologică", "reducere factura gaz"</li>
                                    <li>• <strong>Google Ads:</strong> Campanii pentru "pompe de căldură + oraș", "instalare pompe căldură"</li>
                                    <li>• <strong>Facebook/Instagram:</strong> Posturi educaționale, testimoniale, case studies</li>
                                    <li>• <strong>LinkedIn:</strong> Targetarea dezvoltatorilor și instalatorilor</li>
                                </ul>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">SEO & Content:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="seo_content" placeholder="Cuvinte cheie, articole blog, ghiduri tehnice..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">PPC & Social Ads:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="ppc_social_ads" placeholder="Campanii Google Ads, Facebook Ads, targeting..."></textarea>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Social Media:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="social_media" placeholder="Strategii Facebook, Instagram, LinkedIn..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Marketing:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="email_marketing" placeholder="Newsletter, automatizări, segmentare..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Marketing Traditional -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-newspaper text-green-500 mr-2"></i>
                                Marketing Tradițional & Offline
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Evenimente & Târguri:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="evenimente_targuri" placeholder="Construct Expo, târguri locale, demo-uri..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">PR & Media:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="pr_media" placeholder="Articole specializate, interviuri, case studies..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Campanii Prioritare -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Campanii Prioritare (top 3-5 tactici de implementat primul):</h4>
                            <textarea class="w-full p-3 rounded-md h-32" name="campanii_prioritare" placeholder="Listați cele mai importante campanii/tactici în ordinea priorității cu justificare..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- 5. ACTIONS -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-tasks mr-3"></i>
                            5. ACTIONS - Planul de implementare
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Întrebări Provocatoare -->
                        <div class="question-box p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                Întrebări de Implementare:
                            </h4>
                            <ul class="space-y-2 text-sm">
                                <li>• <strong>Primul pas:</strong> Care este prima acțiune concretă pe care o facem luni?</li>
                                <li>• <strong>Responsabilități:</strong> Cine exact este responsabil pentru fiecare acțiune?</li>
                                <li>• <strong>Resurse:</strong> Ce resurse suplimentare (oameni, buget, timp) sunt necesare?</li>
                                <li>• <strong>Dependințe:</strong> Ce acțiuni trebuie finalizate înainte de altele?</li>
                                <li>• <strong>Riscuri:</strong> Ce poate merge prost și cum ne pregătim?</li>
                            </ul>
                        </div>

                        <!-- Timeline Principal -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-calendar text-blue-500 mr-2"></i>
                                Timeline Principal (3-6 luni)
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemplu Timeline pentru Technova:</p>
                                <ul class="text-sm space-y-1">
                                    <li>• <strong>Luna 1:</strong> Lansare campanii SEO, setup Google Ads, creare conținut educațional</li>
                                    <li>• <strong>Luna 2-3:</strong> Optimizare website, implementare lead nurturing, primul webinar</li>
                                    <li>• <strong>Luna 4-6:</strong> Extindere campanii, parteneriate cu instalatori, măsurare ROI</li>
                                </ul>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Luna 1-2:</label>
                                    <textarea class="w-full p-2 rounded-md h-24" name="luna_1_2" placeholder="Acțiuni pentru primele 2 luni..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Luna 3-4:</label>
                                    <textarea class="w-full p-2 rounded-md h-24"name="luna_3_4"  placeholder="Acțiuni pentru lunile 3-4..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Luna 5-6:</label>
                                    <textarea class="w-full p-2 rounded-md h-24" name="luna_5_6" placeholder="Acțiuni pentru lunile 5-6..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Responsabilități -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-user-check text-green-500 mr-2"></i>
                                Responsabilități pe Echipă
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Marketing Manager:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="marketing_manager" placeholder="Responsabilități specifice pentru marketing..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Echipa Vânzări:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="echipa_vanzari" placeholder="Responsabilități specifice pentru vânzări..."></textarea>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Echipa Tehnică:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="echipa_tehnica" placeholder="Responsabilități tehnice, suport, instalare..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Management:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="management" placeholder="Responsabilități management, buget, strategice..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Resurse Necesare -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Resurse Necesare (4M: Men, Money, Minutes, Megadata):</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Oameni & Competențe:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="oameni_competente" placeholder="Ce oameni/competențe suplimentare sunt necesare?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Buget:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="buget" placeholder="Buget estimativ pe canale/campanii..."></textarea>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Timp & Termene:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="timp_termene" placeholder="Termene critice, timp necesar pentru task-uri..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Date & Informații:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="date_informatii" placeholder="Ce date/informații suplimentare sunt necesare?"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. CONTROL -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-chart-pie mr-3"></i>
                            6. CONTROL - Măsurarea progresului
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Întrebări Provocatoare -->
                        <div class="question-box p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                Întrebări de Măsurare și Control:
                            </h4>
                            <ul class="space-y-2 text-sm">
                                <li>• <strong>Succesul:</strong> Cum vom ști că strategia funcționează după 30 de zile?</li>
                                <li>• <strong>Alarmele:</strong> Ce metrici ne vor alerta că ceva nu merge bine?</li>
                                <li>• <strong>Optimizarea:</strong> Cât de rapid putem adapta strategia dacă e nevoie?</li>
                                <li>• <strong>Raportarea:</strong> Cui și cât de des raportăm progresul?</li>
                                <li>• <strong>Benchmarking:</strong> Cu ce ne comparăm pentru a ști dacă rezultatele sunt bune?</li>
                            </ul>
                        </div>

                        <!-- KPI-uri Principale -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                KPI-uri Principale
                            </h4>
                            <div class="example-box p-4 rounded-lg mb-4">
                                <p class="text-sm text-blue-800 font-medium mb-2">Exemple KPI pentru Technova:</p>
                                <ul class="text-sm space-y-1">
                                    <li>• <strong>Generare lead-uri:</strong> 150 lead-uri calificate/lună din digital</li>
                                    <li>• <strong>Conversie:</strong> 12% rata conversie din lead în vânzare</li>
                                    <li>• <strong>Cost achiziție:</strong> CAC sub 800 RON per client</li>
                                    <li>• <strong>Trafic:</strong> 50% creștere trafic organic în 6 luni</li>
                                    <li>• <strong>Brand:</strong> NPS > 70, rating Google 4.8+</li>
                                </ul>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">KPI Vânzări & Conversie:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="kpi_vanzari_conversie" placeholder="Lead-uri, rata conversie, CAC, LTV, ROI campanii..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">KPI Marketing & Brand:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="kpi_marketing_brand" placeholder="Trafic, engagement, brand awareness, NPS..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Frecvența Review-urilor -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-clock text-green-500 mr-2"></i>
                                Frecvența Review-urilor
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Săptămânal:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="saptamanal" placeholder="Ce monitorizăm săptămânal?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Lunar:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="lunar" placeholder="Analize și rapoarte lunare..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Trimestrial:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="trimestrial" placeholder="Review strategic trimestrial..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Plan de Optimizare -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-tools text-purple-500 mr-2"></i>
                                Plan de Optimizare
                            </h4>
                            <textarea class="w-full p-3 rounded-md h-24" name="plan_de_optimizare" placeholder="Ce măsuri corective luăm dacă KPI-urile nu sunt atinse? Plan B pentru fiecare scenariu..."></textarea>
                        </div>

                        <!-- Tools de Măsurare -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Tools de Măsurare și Dashboard-uri:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Tools Analitice:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="tools_analitice" placeholder="Google Analytics, CRM, tools social media..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Dashboard & Raportare:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="dashboard_raportare" placeholder="Cum organizăm dashboard-urile, cine primește rapoarte..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AVATARUL DE CLIENT -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-user-circle mr-3"></i>
                            AVATARUL DE CLIENT - Buyer Persona
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Exemplu Avatar -->
                        <div class="example-box p-6 rounded-lg mb-6">
                            <h4 class="text-blue-800 font-semibold mb-3 flex items-center">
                                <i class="fas fa-user mr-2"></i>
                                Exemplu Avatar pentru Pompe de Căldură - Technova
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h5 class="font-semibold text-blue-700 mb-2">Andrei Popescu, 42 ani</h5>
                                    <ul class="text-sm space-y-1">
                                        <li><strong>Ocupația:</strong> Inginer IT, venituri 8.000+ RON</li>
                                        <li><strong>Familia:</strong> Căsătorit, 2 copii, casă individuală</li>
                                        <li><strong>Locația:</strong> Zona metropolitană București</li>
                                        <li><strong>Educația:</strong> Studii superioare tehnice</li>
                                        <li><strong>Stilul de viață:</strong> Orientat spre tehnologie, sustenabilitate</li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-blue-700 mb-2">Comportament & Nevoi</h5>
                                    <ul class="text-sm space-y-1">
                                        <li><strong>Motivații:</strong> Reducere costuri, confort, ecologic</li>
                                        <li><strong>Frici:</strong> Investiție mare, complexitate tehnică</li>
                                        <li><strong>Canale:</strong> Google, bloguri tehnice, LinkedIn</li>
                                        <li><strong>Decizie:</strong> Analizează mult, compară opțiuni</li>
                                        <li><strong>Influențe:</strong> Subvenții, prieteni, experți</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Date Demografice -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-id-card text-blue-500 mr-2"></i>
                                Date Demografice
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Nume (fictiv):</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="nume" placeholder="Ex: Maria Ionescu">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Vârsta:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="varsta" placeholder="Ex: 38 ani">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Ocupația & Venit:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="ocupatia_venit" placeholder="Ex: Manager, 6000+ RON">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Locația:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="locatia" placeholder="Ex: Ilfov, casă individuală">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Situația familială:</label>
                                <input type="text" class="w-full p-2 rounded-md" name="situatia_familiala" placeholder="Ex: Căsătorit/ă, 2 copii">
                            </div>
                        </div>

                        <!-- Date Psihografice -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-brain text-green-500 mr-2"></i>
                                Date Psihografice
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Valori & Credințe:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="valori_credinte" placeholder="Ex: Sustenabilitate, eficiență, calitate..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Interese & Hobby-uri:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="interese_hobbyuri" placeholder="Ex: Tehnologie, grădinărit, călătorii..."></textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Stilul de viață:</label>
                                <textarea class="w-full p-2 rounded-md h-20" name="stilul_de_viata" placeholder="Ex: Activ, orientat spre familie, atent la costuri..."></textarea>
                            </div>
                        </div>

                        <!-- Comportament & Nevoi -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-shopping-cart text-purple-500 mr-2"></i>
                                Comportament & Nevoi
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Motivații de cumpărare:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="motivatii_de_cumparare" placeholder="De ce ar cumpăra o pompă de căldură?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Frici & Obiecții:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="frici_obiectii" placeholder="Ce îi împiedică să cumpere?"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Canale & Preferințe -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-broadcast-tower text-red-500 mr-2"></i>
                                Canale & Preferințe de Comunicare
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Surse de informare:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="surse_de_informare" placeholder="Google, social media, prieteni, experți..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Preferințe comunicare:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="preferinte_comunicare" placeholder="Email, telefon, face-to-face, online..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Journey -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Customer Journey pentru Pompe de Căldură:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Awareness (Conștientizare):</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="constientizare" placeholder="Cum află despre pompe de căldură?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Consideration (Considerare):</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="considerare" placeholder="Cum evaluează opțiunile?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Decision (Decizie):</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="decizie" placeholder="Ce îl determină să aleagă?"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- REZUMAT & NEXT STEPS -->
                <div class="bg-white rounded-lg shadow-md mb-8">
                    <div class="section-header text-white p-4 rounded-t-lg">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-flag-checkered mr-3"></i>
                            REZUMAT & NEXT STEPS
                        </h2>
                    </div>
                    <div class="p-6">

                        <!-- Key Takeaways -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                                Key Takeaways din Workshop
                            </h4>
                            <textarea class="w-full p-3 rounded-md h-32" name="key_takeaways" placeholder="Cele mai importante 5 concluzii din workshop..."></textarea>
                        </div>

                        <!-- Acțiuni Imediate -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                Acțiuni Imediate (30 de zile)
                            </h4>
                            <textarea class="w-full p-3 rounded-md h-32" name="actiuni_imediate" placeholder="Ce acțiuni concrete începem în următoarele 30 de zile?"></textarea>
                        </div>

                        <!-- Timeline Follow-up -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-calendar-check text-green-500 mr-2"></i>
                                Timeline Follow-up
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Check-in la 2 săptămâni:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="checkin_2_saptamani" placeholder="Ce verificăm în 2 săptămâni?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Review la 1 lună:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="review_1_luna" placeholder="Review formal la 1 lună..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Evaluare la 3 luni:</label>
                                    <textarea class="w-full p-2 rounded-md h-20" name="evaluare_la_3_luni" placeholder="Evaluare rezultate la 3 luni..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Contacte -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Contacte și Responsabilități Principale:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Lider de Proiect:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="lider_de_proiect" placeholder="Nume și contact">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Facilitator MDA Digital:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="facilitator_mda_digital" placeholder="Nume și contact">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="text-center text-gray-500 text-sm mt-8 p-4 border-t">
                    <p>©️ Template Workshop SOSTAC - Technova & MDA Digital | Pentru utilizare internă</p>
                    <p class="mt-2">Framework SOSTAC®️ dezvoltat de PR Smith | Adaptat pentru industria echipamentelor termice</p>
                </div>
            </div>

            <!-- <script>
              // Funcții pentru interactivitate
              document.addEventListener('DOMContentLoaded', function() {
                // Auto-save la localStorage
                const inputs = document.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                  const savedValue = localStorage.getItem(input.placeholder || input.name);
                  if (savedValue) {
                    input.value = savedValue;
                  }

                  input.addEventListener('input', function() {
                    localStorage.setItem(this.placeholder || this.name, this.value);
                  });
                });

                // Highlight pe focus
                inputs.forEach(input => {
                  input.addEventListener('focus', function() {
                    this.style.backgroundColor = '#eff6ff';
                  });

                  input.addEventListener('blur', function() {
                    this.style.backgroundColor = '';
                  });
                });
              });

              // Print helper
              function printTemplate() {
                window.print();
              }
            </script> -->
        </div>
        <input type="submit"
               name="submit_my_form"
               value="Trimite"
               style="width: calc(100% - 40px); margin: 0 20px; border-radius: 15px; background-color: #1d50da; color: white; padding: 15px 0; border: none; font-size: 18px; cursor: pointer; display: block; box-sizing: border-box;">

    </form>
    </html>
    <?php
    if (isset($_POST['submit_my_form'])) {
        // sanitizeaza si salveaza datele
        global $wpdb;
        $table = 'raspunsuri_marcel';

        $data = [
            'client' => sanitize_text_field($_POST['client']),
            'data_workshop' => isset($_POST['data_workshop']) ? trim(sanitize_text_field($_POST['data_workshop'])) : '',
            'facilitator' => sanitize_text_field($_POST['facilitator']),
            'participanti' => sanitize_textarea_field($_POST['participanti']),
            'analiza_clienti' => sanitize_textarea_field($_POST['analiza_clienti']),
            'analiza_clienti_puncte_forte' => sanitize_textarea_field($_POST['analiza_clienti_puncte_forte']),
            'analiza_clienti_puncte_slabe' => sanitize_textarea_field($_POST['analiza_clienti_puncte_slabe']),
            'analiza_pestel_factori_1' => sanitize_textarea_field($_POST['analiza_pestel_factori_1']),
            'analiza_pestel_factori_2' => sanitize_textarea_field($_POST['analiza_pestel_factori_2']),
            'analiza_competitori1' => sanitize_textarea_field($_POST['analiza_competitori1']),
            'analiza_competitori2' => sanitize_textarea_field($_POST['analiza_competitori2']),
            'analiza_competitori3' => sanitize_textarea_field($_POST['analiza_competitori3']),
            'concluzii_cheie' => sanitize_textarea_field($_POST['concluzii_cheie']),
            'vanzari_profit' => sanitize_textarea_field($_POST['vanzari_profit']),
            'cota_de_piata' => sanitize_textarea_field($_POST['cota_de_piata']),
            'brand_awarness' => sanitize_textarea_field($_POST['brand_awarness']),
            'satisfactia_clientilor' => sanitize_textarea_field($_POST['satisfactia_clientilor']),
            'prioritizarea_obiectivelor' => sanitize_textarea_field($_POST['prioritizarea_obiectivelor']),
            'segmente_tinta' => sanitize_textarea_field($_POST['segmente_tinta']),
            'pozitionare' => sanitize_textarea_field($_POST['pozitionare']),
            'propunerea_de_valoare_unica' => sanitize_textarea_field($_POST['propunerea_de_valoare_unica']),
            'parteneriate_strategice' => sanitize_textarea_field($_POST['parteneriate_strategice']),
            'rezumatul_strategiei' => sanitize_textarea_field($_POST['rezumatul_strategiei']),
            'seo_content' => sanitize_textarea_field($_POST['seo_content']),
            'ppc_social_ads' => sanitize_textarea_field($_POST['ppc_social_ads']),
            'social_media' => sanitize_textarea_field($_POST['social_media']),
            'email_marketing' => sanitize_textarea_field($_POST['email_marketing']),
            'evenimente_targuri' => sanitize_textarea_field($_POST['evenimente_targuri']),
            'pr_media' => sanitize_textarea_field($_POST['pr_media']),
            'campanii_prioritare' => sanitize_textarea_field($_POST['campanii_prioritare']),
            'luna_1_2' => sanitize_textarea_field($_POST['luna_1_2']),
            'luna_3_4' => sanitize_textarea_field($_POST['luna_3_4']),
            'luna_5_6' => sanitize_textarea_field($_POST['luna_5_6']),
            'marketing_manager' => sanitize_textarea_field($_POST['marketing_manager']),
            'echipa_vanzari' => sanitize_textarea_field($_POST['echipa_vanzari']),
            'echipa_tehnica' => sanitize_textarea_field($_POST['echipa_tehnica']),
            'management' => sanitize_textarea_field($_POST['management']),
            'oameni_competente' => sanitize_textarea_field($_POST['oameni_competente']),
            'buget' => sanitize_textarea_field($_POST['buget']),
            'timp_termene' => sanitize_textarea_field($_POST['timp_termene']),
            'date_informatii' => sanitize_textarea_field($_POST['date_informatii']),
            'kpi_vanzari_conversie' => sanitize_textarea_field($_POST['kpi_vanzari_conversie']),
            'kpi_marketing_brand' => sanitize_textarea_field($_POST['kpi_marketing_brand']),
            'saptamanal' => sanitize_textarea_field($_POST['saptamanal']),
            'lunar' => sanitize_textarea_field($_POST['lunar']),
            'trimestrial' => sanitize_textarea_field($_POST['trimestrial']),
            'plan_de_optimizare' => sanitize_textarea_field($_POST['plan_de_optimizare']),
            'tools_analitice' => sanitize_textarea_field($_POST['tools_analitice']),
            'dashboard_raportare' => sanitize_textarea_field($_POST['dashboard_raportare']),
            'nume' => sanitize_text_field($_POST['nume']),
            'varsta' => sanitize_text_field($_POST['varsta']),
            'ocupatia_venit' => sanitize_textarea_field($_POST['ocupatia_venit']),
            'locatia' => sanitize_text_field($_POST['locatia']),
            'situatia_familiala' => sanitize_textarea_field($_POST['situatia_familiala']),
            'valori_credinte' => sanitize_textarea_field($_POST['valori_credinte']),
            'interese_hobbyuri' => sanitize_textarea_field($_POST['interese_hobbyuri']),
            'stilul_de_viata' => sanitize_textarea_field($_POST['stilul_de_viata']),
            'motivatii_de_cumparare' => sanitize_textarea_field($_POST['motivatii_de_cumparare']),
            'frici_obiectii' => sanitize_textarea_field($_POST['frici_obiectii']),
            'surse_de_informare' => sanitize_textarea_field($_POST['surse_de_informare']),
            'preferinte_comunicare' => sanitize_textarea_field($_POST['preferinte_comunicare']),
            'constientizare' => sanitize_textarea_field($_POST['constientizare']),
            'considerare' => sanitize_textarea_field($_POST['considerare']),
            'decizie' => sanitize_textarea_field($_POST['decizie']),
            'key_takeaways' => sanitize_textarea_field($_POST['key_takeaways']),
            'actiuni_imediate' => sanitize_textarea_field($_POST['actiuni_imediate']),
            'checkin_2_saptamani' => sanitize_textarea_field($_POST['checkin_2_saptamani']),
            'review_1_luna' => sanitize_textarea_field($_POST['review_1_luna']),
            'evaluare_la_3_luni' => sanitize_textarea_field($_POST['evaluare_la_3_luni']),
            'lider_de_proiect' => sanitize_textarea_field($_POST['lider_de_proiect']),
            'facilitator_mda_digital' => sanitize_textarea_field($_POST['facilitator_mda_digital']),
            'created_at' => current_time('mysql')
        ];

        $inserted = $wpdb->insert($table, $data);

        if ($inserted) {
//            echo '<div class="alert alert-success" style="display: none;">Datele au fost salvate cu succes.</div>';
            ?>
            <script>
              document.querySelector('.alert-success').style.display = 'block';

              if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
              }
              // opțional golește formularul
              document.querySelector('form').reset();
            </script>
            <?php
        } else {
            ?>
            <script>
                document.querySelector('.alert-danger').style.display = 'block';
            </script>
            <?php
//            echo '<div class="alert alert-danger" style="display: none;">A apărut o eroare la salvare.</div>';
        }
    }
    return ob_get_clean();
}
add_shortcode('my_form', 'my_custom_form_shortcode');

function my_form_admin_menu() {
    add_menu_page('Răspunsuri Formulare', 'Form Responses', 'manage_options', 'form-responses', 'my_form_admin_page');
}
add_action('admin_menu', 'my_form_admin_menu');

function my_form_admin_page() {
    global $wpdb;
    $table = 'raspunsuri_marcel';
//    $results = $wpdb->get_results("SELECT * FROM $table ORDER BY created_at DESC");
    // === PAGINARE ===
    $items_per_page = 10;
    $current_page = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $offset = ($current_page - 1) * $items_per_page;

    // Total rânduri
    $total_items = $wpdb->get_var("SELECT COUNT(*) FROM $table");

    // Obține doar rândurile pentru pagina curentă
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table ORDER BY created_at DESC LIMIT %d OFFSET %d",
            $items_per_page,
            $offset
        )
    );

    echo '<h1 style="font-size: 2em; font-weight: 600;">Răspunsuri Formulare</h1>';
    echo '<table class="wp-list-table widefat striped">';
    echo '
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Data Workshop</th>
                <th>Facilitor</th>
                <th>Participanti</th>
                <th>Data completării</th>
                <th>Vezi</th>
            </tr>
        </thead><tbody>
    ';

    foreach ($results as $row) {
        echo '<tr>';
        echo '<td>' . esc_html($row->id) . '</td>';
        echo '<td>' . esc_html($row->client) . '</td>';
        echo '<td>' . esc_html($row->data_workshop) . '</td>';
        echo '<td>' . esc_html($row->facilitor) . '</td>';
        echo '<td>' . esc_html($row->participanti) . '</td>';
        echo '<td>' . esc_html($row->created_at) . '</td>';
        echo '<td><a href="' . admin_url('admin.php?page=form-responses&view=' . intval($row->id)) . '">Vezi</a></td>';
        echo '</tr>';
    }

    echo '</tbody></table>';

    // === PAGINARE ===
    $total_pages = ceil($total_items / $items_per_page);
    if ($total_pages > 1) {
        echo '<div class="tablenav mr-5"><div class="tablenav-pages">';

        echo paginate_links(array(
            'base' => add_query_arg('paged', '%#%'),
            'format' => '',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('« Anterior'),
            'next_text' => __('Următor »'),
        ));

        echo '</div></div>';
    }

    // Dacă este vizualizat un răspuns
    if (isset($_GET['view'])) {
        $id = intval($_GET['view']);
        $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table WHERE id = %d", $id));
        if ($item) {

            ob_start();
            ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
            <script>
              function populateValuesFromPlaceholders(element) {
                const inputs = element.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                  if (!input.value && input.placeholder) {
                    input.value = input.placeholder;
                  }
                });
              }

              // function generatePDF() {
              //     const element = document.getElementById('pdf-content');
              //     populateValuesFromPlaceholders(element);
              //     const opt = {
              //         margin:       0.5,
              //         filename:     'formular_completat.pdf',
              //         image:        { type: 'jpeg', quality: 0.98 },
              //         html2canvas:  { scale: 2, scrollX: 0, scrollY: 0 },
              //         jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
              //     };
              //     html2pdf().set(opt).from(element).save();
              // }
              function generatePDF() {
                const element = document.getElementById('pdf-content');
                populateValuesFromPlaceholders(element);

                // ia dimensiunile elementului
                const elementWidth = element.scrollWidth;
                const elementHeight = element.scrollHeight;

                // convert px la mm (1px = 0.264583 mm)
                const pxToMm = px => px * 0.264583;

                const pdfWidth = pxToMm(elementWidth);
                const pdfHeight = pxToMm(elementHeight);

                const opt = {
                  margin: 0,
                  filename: 'formular_completat.pdf',
                  image: { type: 'jpeg', quality: 0.98 },
                  html2canvas: { scale: 2, scrollX: 0, scrollY: 0 },
                  jsPDF: { unit: 'mm', format: [pdfWidth, pdfHeight], orientation: 'portrait' }
                };

                html2pdf().set(opt).from(element).save();
              }
            </script>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
            <style>
                @media print {
                    .no-print { display: none !important; }
                    .print-break { page-break-inside: avoid; }
                    .container { max-width: none; }
                }

                .gradient-bg {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                }

                .section-header {
                    background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
                }

                .question-box {
                    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
                    border-left: 4px solid #f59e0b;
                }

                .example-box {
                    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
                    border-left: 4px solid #3b82f6;
                }

                textarea, input[type="text"], input[type="email"], input[type="tel"] {
                    border: 2px solid #e5e7eb;
                    transition: border-color 0.3s ease;
                }

                textarea:focus, input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus {
                    border-color: #3b82f6;
                    outline: none;
                    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
                }

                .icon-bg {
                    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
                }

                .alert {
                    padding: 15px;
                    margin-bottom: 20px;
                    border-radius: 4px;
                    border: 1px solid transparent;
                }
                .alert-danger {
                    background-color: #f2dede;
                    color: #a94442;
                    border-color: #ebccd1;
                }
            </style>
            <button onclick="generatePDF()" class="bg-blue-500 text-white px-4 py-2 rounded no-print mb-5">Descarcă PDF</button>
            <form method="post" id="pdf-content">
                <div class="bg-gray-50 text-gray-800">
                    <div class="container mx-auto px-4 py-8 max-w-4xl">

                        <!-- Header -->
                        <div class="gradient-bg text-white p-8 rounded-lg mb-8 text-center">
                            <div class="flex justify-center items-center mb-4">
                                <div class="bg-white text-blue-600 p-3 rounded-lg mr-4">
                                    <i class="fas fa-chart-line text-2xl"></i>
                                </div>
                                <h1 class="text-3xl font-bold">Workshop SOSTAC</h1>
                            </div>
                            <h2 class="text-xl mb-2">Template de Lucru pentru Technova</h2>
                            <p class="text-blue-100">Planificare Strategică Marketing pentru Pompe de Căldură și Instalații Termice</p>
                            <p class="text-sm text-blue-200 mt-4">Facilitat de MDA Digital</p>
                        </div>

                        <!-- Info Client -->
                        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                            <h3 class="text-xl font-semibold mb-4 flex items-center">
                                <i class="fas fa-building text-blue-600 mr-2"></i>
                                Informații Workshop
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Participant:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="client" placeholder="Numele participantului" value="<?= esc_attr($item->client) ?>" readonly>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Data Workshop:</label>
                                    <input type="date" class="w-full p-2 rounded-md" name="data_workshop" placeholder="dd/mm/yyyy" value="<?= esc_attr($item->data_workshop) ?>" readonly>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Facilitator:</label>
                                    <input type="text" class="w-full p-2 rounded-md" name="facilitator" placeholder="Numele facilitatorului" value="<?= esc_attr($item->facilitator) ?>" readonly>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Participanți:</label>
                                <textarea class="w-full p-2 rounded-md h-20" name="participanti" placeholder="<?= esc_attr($item->participanti) ?>" readonly></textarea>
                            </div>
                        </div>

                        <!-- Ce este SOSTAC -->
                        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                            <h3 class="text-xl font-semibold mb-4 flex items-center">
                                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                                Ce este SOSTAC?
                            </h3>
                            <div class="bg-blue-50 p-4 rounded-lg mb-4">
                                <p class="text-gray-700 mb-3">
                                    <strong>SOSTAC®️</strong> este un framework de planificare strategică dezvoltat de PR Smith, format din 6 componente:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <ul class="space-y-2 text-sm">
                                            <li><strong>S</strong>ituation - Unde suntem acum?</li>
                                            <li><strong>O</strong>bjectives - Unde vrem să ajungem?</li>
                                            <li><strong>S</strong>trategy - Cum ajungem acolo?</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="space-y-2 text-sm">
                                            <li><strong>T</strong>actics - Detaliile strategiei</li>
                                            <li><strong>A</strong>ctions - Planul de implementare</li>
                                            <li><strong>C</strong>ontrol - Măsurarea progresului</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-green-800 mb-2">Beneficii SOSTAC pentru Technova:</h4>
                                <div class="grid grid-cols-2 gap-2 text-sm">
                                    <div>✓ Aliniere echipă tehnică</div>
                                    <div>✓ Claritate strategică</div>
                                    <div>✓ Execuție coerentă</div>
                                    <div>✓ Rezultate măsurabile</div>
                                </div>
                            </div>
                        </div>

                        <!-- 1. SITUATION ANALYSIS -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-search mr-3"></i>
                                    1. SITUATION ANALYSIS - Unde suntem acum?
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Întrebări Provocatoare -->
                                <div class="question-box p-4 rounded-lg mb-6">
                                    <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Întrebări Esențiale pentru Technova:
                                    </h4>
                                    <ul class="space-y-2 text-sm">
                                        <li>• <strong>Piața:</strong> Cum arată piața de pompe de căldură în România în 2025? Care sunt trendurile?</li>
                                        <li>• <strong>Poziția:</strong> Care este cota de piață actuală a Technova? Cum ne percep clienții?</li>
                                        <li>• <strong>Competiția:</strong> Cine sunt principalii 5 competitori? Ce fac ei diferit?</li>
                                        <li>• <strong>Provocări:</strong> Ce ne împiedică să creștem mai repede? Care sunt punctele noastre slabe?</li>
                                        <li>• <strong>Oportunități:</strong> Ce schimbări din piață ne-ar putea avantaja în următorii 2 ani?</li>
                                    </ul>
                                </div>

                                <!-- Analiză Clienți -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-users text-blue-500 mr-2"></i>
                                        Analiză Clienți (Cine? Cum? De ce?)
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemplu pentru Technova:</p>
                                        <p class="text-sm">Clienți actuali: instalatori certificați (60%), dezvoltatori imobiliari (25%), persoane fizice cu case (15%). Comportament: caută soluții tehnice complete, influențați de preț și garanție, preferă comunicarea directă cu specialiștii.</p>
                                    </div>
                                    <textarea class="w-full p-3 rounded-md h-32" name="analiza_clienti" placeholder="<?= esc_attr($item->analiza_clienti) ?>" readonly></textarea>
                                </div>

                                <!-- Analiză Companie -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-building text-green-500 mr-2"></i>
                                        Analiză Companie (Forțe & Slăbiciuni)
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Puncte Forte:</label>
                                            <textarea class="w-full p-3 rounded-md h-24" name="analiza_clienti_puncte_forte" placeholder="<?= esc_attr($item->analiza_clienti_puncte_forte) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Puncte Slabe:</label>
                                            <textarea class="w-full p-3 rounded-md h-24" name="analiza_clienti_puncte_slabe" placeholder="<?= esc_attr($item->analiza_clienti_puncte_slabe) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Analiză PESTEL -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-globe text-purple-500 mr-2"></i>
                                        Analiză PESTEL pentru Industria Pompelor de Căldură
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemple specifice pentru Technova:</p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                            <div>
                                                <p><strong>Politic:</strong> Casa Eficientă, subvenții UE pentru renovări</p>
                                                <p><strong>Economic:</strong> Creșterea prețurilor energiei, inflație</p>
                                                <p><strong>Social:</strong> Conștientizare ecologică, case inteligente</p>
                                            </div>
                                            <div>
                                                <p><strong>Tehnologic:</strong> Pompe de căldură hibride, IoT</p>
                                                <p><strong>Ecologic:</strong> Reducere emisii CO2, EU Green Deal</p>
                                                <p><strong>Legal:</strong> Directiva EU renovări, certificare energetică</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <textarea class="w-full p-3 rounded-md h-32" name="analiza_pestel_factori_1" placeholder="<?= esc_attr($item->analiza_pestel_factori_1) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <textarea class="w-full p-3 rounded-md h-32" name="analiza_pestel_factori_2" placeholder="<?= esc_attr($item->analiza_pestel_factori_2) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Analiză Competitori -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-chart-bar text-red-500 mr-2"></i>
                                        Analiză Competitori
                                    </h4>
                                    <div class="question-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-amber-800 font-medium mb-2">Întrebări Cheie:</p>
                                        <ul class="text-sm space-y-1">
                                            <li>• Cine sunt top 3 competitori direcți pentru pompe de căldură?</li>
                                            <li>• Ce strategii de marketing folosesc? Unde sunt vizibili?</li>
                                            <li>• Care sunt punctele lor slabe pe care le putem exploata?</li>
                                            <li>• Cum comunică cu clienții? Ce mesaje folosesc?</li>
                                        </ul>
                                    </div>
                                    <textarea class="w-full p-3 rounded-md h-32" name="analiza_competitori1" placeholder="<?= esc_attr($item->analiza_competitori1) ?>" readonly></textarea>
                                    <textarea class="w-full p-3 rounded-md h-32 mt-3" name="analiza_competitori2" placeholder="<?= esc_attr($item->analiza_competitori2) ?>" readonly></textarea>
                                    <textarea class="w-full p-3 rounded-md h-32 mt-3" name="analiza_competitori3" placeholder="<?= esc_attr($item->analiza_competitori3) ?>" readonly></textarea>
                                </div>

                                <!-- Concluzii Situation -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Concluzii Cheie - Situation Analysis:</h4>
                                    <textarea class="w-full p-3 rounded-md h-24" name="concluzii_cheie" placeholder="<?= esc_attr($item->concluzii_cheie) ?>" readonly></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- 2. OBJECTIVES -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-target mr-3"></i>
                                    2. OBJECTIVES - Unde vrem să ajungem?
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Întrebări Provocatoare -->
                                <div class="question-box p-4 rounded-lg mb-6">
                                    <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Întrebări Strategice pentru Technova:
                                    </h4>
                                    <ul class="space-y-2 text-sm">
                                        <li>• <strong>Viziune:</strong> Unde vrem să fie Technova în 12 luni? Care este visul nostru?</li>
                                        <li>• <strong>Prioritatea #1:</strong> Care este cel mai important obiectiv pentru pompe de căldură?</li>
                                        <li>• <strong>Măsurare:</strong> Ce metrici ne-ar face să știm că am reușit?</li>
                                        <li>• <strong>Resurse:</strong> Cât suntem dispuși să investim pentru aceste obiective?</li>
                                        <li>• <strong>Timeline:</strong> Ce vrem să realizăm în primele 90 de zile?</li>
                                    </ul>
                                </div>

                                <!-- Obiective SMART Cantitative -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-chart-line text-blue-500 mr-2"></i>
                                        Obiective SMART Cantitative
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemple pentru Technova:</p>
                                        <ul class="text-sm space-y-1">
                                            <li>• Creșterea vânzărilor de pompe de căldură cu 35% în 12 luni</li>
                                            <li>• Generarea a 150 de lead-uri calificate/lună din digital</li>
                                            <li>• Creșterea cotei de piață cu 2 puncte procentuale</li>
                                            <li>• Atingerea unui ROI de 4:1 pe campaniile digitale</li>
                                        </ul>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Vânzări/Profit:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->vanzari_profit) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Cota de piață/Clienți:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->cota_de_piata) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Obiective SMART Calitative -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-heart text-red-500 mr-2"></i>
                                        Obiective SMART Calitative
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Brand Awareness:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->brand_awarness) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Satisfacția clienților:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->satisfactia_clientilor) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prioritizarea Obiectivelor -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Prioritizarea Obiectivelor (1-5, 1=cel mai important):</h4>
                                    <textarea class="w-full p-3 rounded-md h-24" placeholder="<?= esc_attr($item->prioritizarea_obiectivelor) ?>" readonly></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- 3. STRATEGY -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-chess mr-3"></i>
                                    3. STRATEGY - Cum ajungem acolo?
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Întrebări Provocatoare -->
                                <div class="question-box p-4 rounded-lg mb-6">
                                    <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Întrebări Strategice Esențiale:
                                    </h4>
                                    <ul class="space-y-2 text-sm">
                                        <li>• <strong>Diferențierea:</strong> Prin ce este Technova unică față de competitori?</li>
                                        <li>• <strong>Focusul:</strong> Pe ce segment de clienți ne concentrăm primul?</li>
                                        <li>• <strong>Mesajul:</strong> Care este mesajul central care rezonează cu clienții?</li>
                                        <li>• <strong>Canalele:</strong> Unde întâlnim cel mai eficient clienții potențiali?</li>
                                        <li>• <strong>Parteneriatele:</strong> Cu cine ne-ar ajuta să colaborăm?</li>
                                    </ul>
                                </div>

                                <!-- Segmente Țintă -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-bullseye text-green-500 mr-2"></i>
                                        Segmente Țintă
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemplu pentru Technova:</p>
                                        <p class="text-sm">Segment Principal: Proprietari case individuale, urban/suburban, venituri peste medie, vârsta 35-55 ani, preocupați de costuri energetice și sustenabilitate</p>
                                    </div>
                                    <textarea class="w-full p-3 rounded-md h-32" placeholder="<?= esc_attr($item->segmente_tinta) ?>" readonly></textarea>
                                </div>

                                <!-- Poziționare -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-map-marker-alt text-purple-500 mr-2"></i>
                                        Poziționare
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemplu pentru Technova:</p>
                                        <p class="text-sm">"Technova - Partenerul de încredere pentru soluții complete de încălzire durabilă. 29 de ani de experiență, tehnologie europeană certificată, suport tehnic specializat."</p>
                                    </div>
                                    <textarea class="w-full p-3 rounded-md h-24" placeholder="<?= esc_attr($item->pozitionare) ?>" readonly></textarea>
                                </div>

                                <!-- Propunerea de Valoare -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-gem text-yellow-500 mr-2"></i>
                                        Propunerea de Valoare Unică
                                    </h4>
                                    <textarea class="w-full p-3 rounded-md h-32" placeholder="<?= esc_attr($item->propunerea_de_valoare_unica) ?>" readonly></textarea>
                                </div>

                                <!-- Parteneriate -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-handshake text-blue-500 mr-2"></i>
                                        Parteneriate Strategice
                                    </h4>
                                    <textarea class="w-full p-3 rounded-md h-24" placeholder="<?= esc_attr($item->parteneriate_strategice) ?>" readonly></textarea>
                                </div>

                                <!-- Rezumat Strategie -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Rezumatul Strategiei (1-2 paragrafe):</h4>
                                    <textarea class="w-full p-3 rounded-md h-32" placeholder="<?= esc_attr($item->rezumatul_strategiei) ?>" readonly></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- 4. TACTICS -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-cogs mr-3"></i>
                                    4. TACTICS - Detaliile strategiei
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Întrebări Provocatoare -->
                                <div class="question-box p-4 rounded-lg mb-6">
                                    <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Întrebări Tactice Concrete:
                                    </h4>
                                    <ul class="space-y-2 text-sm">
                                        <li>• <strong>Digital:</strong> Ce campanii digitale specifice vor genera cele mai multe lead-uri?</li>
                                        <li>• <strong>Conținut:</strong> Ce tip de conținut educațional vor găsi util clienții?</li>
                                        <li>• <strong>Canale:</strong> Pe ce platforme sunt activi clienții noștri țintă?</li>
                                        <li>• <strong>Buget:</strong> Cum împărțim bugetul între diferitele canale?</li>
                                        <li>• <strong>Timeline:</strong> Care campanii lansăm primul și de ce?</li>
                                    </ul>
                                </div>

                                <!-- Marketing Digital -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-laptop text-blue-500 mr-2"></i>
                                        Marketing Digital
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemple pentru Technova:</p>
                                        <ul class="text-sm space-y-1">
                                            <li>• <strong>SEO:</strong> "pompe de căldură preț", "încălzire ecologică", "reducere factura gaz"</li>
                                            <li>• <strong>Google Ads:</strong> Campanii pentru "pompe de căldură + oraș", "instalare pompe căldură"</li>
                                            <li>• <strong>Facebook/Instagram:</strong> Posturi educaționale, testimoniale, case studies</li>
                                            <li>• <strong>LinkedIn:</strong> Targetarea dezvoltatorilor și instalatorilor</li>
                                        </ul>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">SEO & Content:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->seo_content) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">PPC & Social Ads:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->ppc_social_ads) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Social Media:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->social_media) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Email Marketing:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->email_marketing) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Marketing Traditional -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-newspaper text-green-500 mr-2"></i>
                                        Marketing Tradițional & Offline
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Evenimente & Târguri:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->evenimente_targuri) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">PR & Media:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->pr_media) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campanii Prioritare -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Campanii Prioritare (top 3-5 tactici de implementat primul):</h4>
                                    <textarea class="w-full p-3 rounded-md h-32" placeholder="<?= esc_attr($item->campanii_prioritare) ?>" readonly></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- 5. ACTIONS -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-tasks mr-3"></i>
                                    5. ACTIONS - Planul de implementare
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Întrebări Provocatoare -->
                                <div class="question-box p-4 rounded-lg mb-6">
                                    <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Întrebări de Implementare:
                                    </h4>
                                    <ul class="space-y-2 text-sm">
                                        <li>• <strong>Primul pas:</strong> Care este prima acțiune concretă pe care o facem luni?</li>
                                        <li>• <strong>Responsabilități:</strong> Cine exact este responsabil pentru fiecare acțiune?</li>
                                        <li>• <strong>Resurse:</strong> Ce resurse suplimentare (oameni, buget, timp) sunt necesare?</li>
                                        <li>• <strong>Dependințe:</strong> Ce acțiuni trebuie finalizate înainte de altele?</li>
                                        <li>• <strong>Riscuri:</strong> Ce poate merge prost și cum ne pregătim?</li>
                                    </ul>
                                </div>

                                <!-- Timeline Principal -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-calendar text-blue-500 mr-2"></i>
                                        Timeline Principal (3-6 luni)
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemplu Timeline pentru Technova:</p>
                                        <ul class="text-sm space-y-1">
                                            <li>• <strong>Luna 1:</strong> Lansare campanii SEO, setup Google Ads, creare conținut educațional</li>
                                            <li>• <strong>Luna 2-3:</strong> Optimizare website, implementare lead nurturing, primul webinar</li>
                                            <li>• <strong>Luna 4-6:</strong> Extindere campanii, parteneriate cu instalatori, măsurare ROI</li>
                                        </ul>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Luna 1-2:</label>
                                            <textarea class="w-full p-2 rounded-md h-24" placeholder="<?= esc_attr($item->luna_1_2) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Luna 3-4:</label>
                                            <textarea class="w-full p-2 rounded-md h-24" placeholder="<?= esc_attr($item->luna_3_4) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Luna 5-6:</label>
                                            <textarea class="w-full p-2 rounded-md h-24" placeholder="<?= esc_attr($item->luna_5_6) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Responsabilități -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-user-check text-green-500 mr-2"></i>
                                        Responsabilități pe Echipă
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Marketing Manager:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->marketing_manager) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Echipa Vânzări:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->echipa_vanzari) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Echipa Tehnică:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->echipa_tehnica) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Management:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->management) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Resurse Necesare -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Resurse Necesare (4M: Men, Money, Minutes, Megadata):</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Oameni & Competențe:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->oameni_competente) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Buget:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->buget) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Timp & Termene:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->timp_termene) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Date & Informații:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->date_informatii) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6. CONTROL -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-chart-pie mr-3"></i>
                                    6. CONTROL - Măsurarea progresului
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Întrebări Provocatoare -->
                                <div class="question-box p-4 rounded-lg mb-6">
                                    <h4 class="font-semibold text-amber-800 mb-3 flex items-center">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Întrebări de Măsurare și Control:
                                    </h4>
                                    <ul class="space-y-2 text-sm">
                                        <li>• <strong>Succesul:</strong> Cum vom ști că strategia funcționează după 30 de zile?</li>
                                        <li>• <strong>Alarmele:</strong> Ce metrici ne vor alerta că ceva nu merge bine?</li>
                                        <li>• <strong>Optimizarea:</strong> Cât de rapid putem adapta strategia dacă e nevoie?</li>
                                        <li>• <strong>Raportarea:</strong> Cui și cât de des raportăm progresul?</li>
                                        <li>• <strong>Benchmarking:</strong> Cu ce ne comparăm pentru a ști dacă rezultatele sunt bune?</li>
                                    </ul>
                                </div>

                                <!-- KPI-uri Principale -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                        KPI-uri Principale
                                    </h4>
                                    <div class="example-box p-4 rounded-lg mb-4">
                                        <p class="text-sm text-blue-800 font-medium mb-2">Exemple KPI pentru Technova:</p>
                                        <ul class="text-sm space-y-1">
                                            <li>• <strong>Generare lead-uri:</strong> 150 lead-uri calificate/lună din digital</li>
                                            <li>• <strong>Conversie:</strong> 12% rata conversie din lead în vânzare</li>
                                            <li>• <strong>Cost achiziție:</strong> CAC sub 800 RON per client</li>
                                            <li>• <strong>Trafic:</strong> 50% creștere trafic organic în 6 luni</li>
                                            <li>• <strong>Brand:</strong> NPS > 70, rating Google 4.8+</li>
                                        </ul>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">KPI Vânzări & Conversie:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->kpi_vanzari_conversie) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">KPI Marketing & Brand:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->kpi_marketing_brand) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Frecvența Review-urilor -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-clock text-green-500 mr-2"></i>
                                        Frecvența Review-urilor
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Săptămânal:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->saptamanal) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Lunar:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->lunar) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Trimestrial:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->trimestrial) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Plan de Optimizare -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-tools text-purple-500 mr-2"></i>
                                        Plan de Optimizare
                                    </h4>
                                    <textarea class="w-full p-3 rounded-md h-24" placeholder="<?= esc_attr($item->plan_de_optimizare) ?>" readonly></textarea>
                                </div>

                                <!-- Tools de Măsurare -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Tools de Măsurare și Dashboard-uri:</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Tools Analitice:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->tools_analitice) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Dashboard & Raportare:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->dashboard_raportare) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- AVATARUL DE CLIENT -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-user-circle mr-3"></i>
                                    AVATARUL DE CLIENT - Buyer Persona
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Exemplu Avatar -->
                                <div class="example-box p-6 rounded-lg mb-6">
                                    <h4 class="text-blue-800 font-semibold mb-3 flex items-center">
                                        <i class="fas fa-user mr-2"></i>
                                        Exemplu Avatar pentru Pompe de Căldură - Technova
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h5 class="font-semibold text-blue-700 mb-2">Andrei Popescu, 42 ani</h5>
                                            <ul class="text-sm space-y-1">
                                                <li><strong>Ocupația:</strong> Inginer IT, venituri 8.000+ RON</li>
                                                <li><strong>Familia:</strong> Căsătorit, 2 copii, casă individuală</li>
                                                <li><strong>Locația:</strong> Zona metropolitană București</li>
                                                <li><strong>Educația:</strong> Studii superioare tehnice</li>
                                                <li><strong>Stilul de viață:</strong> Orientat spre tehnologie, sustenabilitate</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold text-blue-700 mb-2">Comportament & Nevoi</h5>
                                            <ul class="text-sm space-y-1">
                                                <li><strong>Motivații:</strong> Reducere costuri, confort, ecologic</li>
                                                <li><strong>Frici:</strong> Investiție mare, complexitate tehnică</li>
                                                <li><strong>Canale:</strong> Google, bloguri tehnice, LinkedIn</li>
                                                <li><strong>Decizie:</strong> Analizează mult, compară opțiuni</li>
                                                <li><strong>Influențe:</strong> Subvenții, prieteni, experți</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Date Demografice -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-id-card text-blue-500 mr-2"></i>
                                        Date Demografice
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Nume (fictiv):</label>
                                            <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->nume) ?>" readonly>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Vârsta:</label>
                                            <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->varsta) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Ocupația & Venit:</label>
                                            <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->ocupatia_venit) ?>" readonly>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Locația:</label>
                                            <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->locatia) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Situația familială:</label>
                                        <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->situatia_familiala) ?>" readonly>
                                    </div>
                                </div>

                                <!-- Date Psihografice -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-brain text-green-500 mr-2"></i>
                                        Date Psihografice
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Valori & Credințe:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->valori_credinte) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Interese & Hobby-uri:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->interese_hobbyuri) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Stilul de viață:</label>
                                        <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->stilul_de_viata) ?>" readonly></textarea>
                                    </div>
                                </div>

                                <!-- Comportament & Nevoi -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-shopping-cart text-purple-500 mr-2"></i>
                                        Comportament & Nevoi
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Motivații de cumpărare:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->motivatii_de_cumparare) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Frici & Obiecții:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->frici_obiectii) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Canale & Preferințe -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-broadcast-tower text-red-500 mr-2"></i>
                                        Canale & Preferințe de Comunicare
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Surse de informare:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->surse_de_informare) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Preferințe comunicare:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->preferinte_comunicare) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Customer Journey -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Customer Journey pentru Pompe de Căldură:</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Awareness (Conștientizare):</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->constientizare) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Consideration (Considerare):</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->considerare) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Decision (Decizie):</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->decizie) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- REZUMAT & NEXT STEPS -->
                        <div class="bg-white rounded-lg shadow-md mb-8">
                            <div class="section-header text-white p-4 rounded-t-lg">
                                <h2 class="text-2xl font-bold flex items-center">
                                    <i class="fas fa-flag-checkered mr-3"></i>
                                    REZUMAT & NEXT STEPS
                                </h2>
                            </div>
                            <div class="p-6">

                                <!-- Key Takeaways -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                                        Key Takeaways din Workshop
                                    </h4>
                                    <textarea class="w-full p-3 rounded-md h-32" placeholder="<?= esc_attr($item->key_takeaways) ?>" readonly></textarea>
                                </div>

                                <!-- Acțiuni Imediate -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-rocket text-blue-500 mr-2"></i>
                                        Acțiuni Imediate (30 de zile)
                                    </h4>
                                    <textarea class="w-full p-3 rounded-md h-32" placeholder="<?= esc_attr($item->actiuni_imediate) ?>" readonly></textarea>
                                </div>

                                <!-- Timeline Follow-up -->
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-calendar-check text-green-500 mr-2"></i>
                                        Timeline Follow-up
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Check-in la 2 săptămâni:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->checkin_2_saptamani) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Review la 1 lună:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->review_1_luna) ?>" readonly></textarea>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Evaluare la 3 luni:</label>
                                            <textarea class="w-full p-2 rounded-md h-20" placeholder="<?= esc_attr($item->evaluare_la_3_luni) ?>" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contacte -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-3">Contacte și Responsabilități Principale:</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Lider de Proiect:</label>
                                            <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->lider_de_proiect) ?>" readonly>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Facilitator MDA Digital:</label>
                                            <input type="text" class="w-full p-2 rounded-md" placeholder="<?= esc_attr($item->facilitator_mda_digital) ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="text-center text-gray-500 text-sm mt-8 p-4 border-t">
                            <p>©️ Template Workshop SOSTAC - Technova & MDA Digital | Pentru utilizare internă</p>
                            <p class="mt-2">Framework SOSTAC®️ dezvoltat de PR Smith | Adaptat pentru industria echipamentelor termice</p>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            echo ob_get_clean();
//         exit; // evită ca restul paginii să se mai încarce
        } else {
            echo '<div class="alert alert-danger"><p>Răspunsul nu a fost găsit.</p></div>';
        }
    }
}