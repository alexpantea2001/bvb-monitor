<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Goutte\Client;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stockController = new StockController();

        // Apelează metoda checkLatestModifiesOnStocks
        $stockController->checkLatestModifiesOnStocks();

        $stocksData = $stockController->getLastStocksData();

        return view('home',
            [
                'sharesData' => $stocksData
            ]
        );
    }
}
