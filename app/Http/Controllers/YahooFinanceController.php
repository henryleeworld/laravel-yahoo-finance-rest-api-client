<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Scheb\YahooFinanceApi\ApiClientFactory;

class YahooFinanceController extends Controller
{
    private $yahooFinanceApiClient;

    /**
     * Instantiate a new YahooFinanceController instance.
     */
    public function __construct()
    {
        $this->yahooFinanceApiClient = ApiClientFactory::createApiClient();
    }

    public function show() 
    {
        $stocks = Stock::where('sector', 'Information Technology')->take(10)->get();
        foreach ($stocks as $stock) {
            echo '股票：' . $stock->symbol . '資料：' . json_encode($this->yahooFinanceApiClient->getQuote($stock->symbol)) . PHP_EOL;
		}
    }
}
