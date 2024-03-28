<?php

use App\Http\Controllers\YahooFinanceController;
use Illuminate\Support\Facades\Route;

Route::get('yahoo_finance/show/', [YahooFinanceController::class, 'show']);
