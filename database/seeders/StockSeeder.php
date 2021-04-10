<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
			[
                'id'     => 1,
                'symbol' => 'AAPL',
                'name'   => 'Apple Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 2,
                'symbol' => 'MSFT',
                'name'   => 'Microsoft Corp',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 3,
                'symbol' => 'AMZN',
                'name'   => 'Amazon.com Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 4,
                'symbol' => 'TSLA',
                'name'   => 'Tesla Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 5,
                'symbol' => 'FB',
                'name'   => 'Facebook Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 6,
                'symbol' => 'GOOG',
                'name'   => 'Alphabet Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 7,
                'symbol' => 'GOOGL',
                'name'   => 'Alphabet Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 8,
                'symbol' => 'NVDA',
                'name'   => 'NVIDIA Corp',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 9,
                'symbol' => 'PYPL',
                'name'   => 'PayPal Holdings Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 10,
                'symbol' => 'INTC',
                'name'   => 'Intel Corp',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 11,
                'symbol' => 'CMCSA',
                'name'   => 'Comcast Corp',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 12,
                'symbol' => 'NFLX',
                'name'   => 'Netflix Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 13,
                'symbol' => 'ADBE',
                'name'   => 'Adobe Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 14,
                'symbol' => 'CSCO',
                'name'   => 'Cisco Systems Inc/Delaware',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 15,
                'symbol' => 'PEP',
                'name'   => 'PepsiCo Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 16,
                'symbol' => 'AVGO',
                'name'   => 'Broadcom Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 17,
                'symbol' => 'TXN',
                'name'   => 'Texas Instruments Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 18,
                'symbol' => 'TMUS',
                'name'   => 'T-Mobile US Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 19,
                'symbol' => 'COST',
                'name'   => 'Costco Wholesale Corp',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 20,
                'symbol' => 'QCOM',
                'name'   => 'QUALCOMM Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 21,
                'symbol' => 'AMGN',
                'name'   => 'Amgen Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 22,
                'symbol' => 'SBUX',
                'name'   => 'Starbucks Corp',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 23,
                'symbol' => 'AMAT',
                'name'   => 'Applied Materials Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 24,
                'symbol' => 'CHTR',
                'name'   => 'Charter Communications Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 25,
                'symbol' => 'INTU',
                'name'   => 'Intuit Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 26,
                'symbol' => 'MU',
                'name'   => 'Micron Technology Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 27,
                'symbol' => 'AMD',
                'name'   => 'Advanced Micro Devices Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 28,
                'symbol' => 'BKNG',
                'name'   => 'Booking Holdings Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 29,
                'symbol' => 'LRCX',
                'name'   => 'Lam Research Corp',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 30,
                'symbol' => 'ISRG',
                'name'   => 'Intuitive Surgical Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 31,
                'symbol' => 'MDLZ',
                'name'   => 'Mondelez International Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 32,
                'symbol' => 'GILD',
                'name'   => 'Gilead Sciences Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 33,
                'symbol' => 'FISV',
                'name'   => 'Fiserv Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 34,
                'symbol' => 'ADP',
                'name'   => 'Automatic Data Processing Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 35,
                'symbol' => 'MELI',
                'name'   => 'MercadoLibre Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 36,
                'symbol' => 'ZM',
                'name'   => 'Zoom Video Communications Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 37,
                'symbol' => 'ATVI',
                'name'   => 'Activision Blizzard Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 38,
                'symbol' => 'CSX',
                'name'   => 'CSX Corp',
                'class'  => 'Common Stock',
                'sector' => 'Industrials',
            ],
            [
                'id'     => 39,
                'symbol' => 'JD',
                'name'   => 'JD.com Inc ADR',
                'class'  => 'American Depository Receipt',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 40,
                'symbol' => 'ADSK',
                'name'   => 'Autodesk Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 41,
                'symbol' => 'BIDU',
                'name'   => 'Baidu Inc ADR',
                'class'  => 'American Depository Receipt',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 42,
                'symbol' => 'ADI',
                'name'   => 'Analog Devices Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 43,
                'symbol' => 'NXPI',
                'name'   => 'NXP Semiconductors NV',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 44,
                'symbol' => 'ILMN',
                'name'   => 'Illumina Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 45,
                'symbol' => 'VRTX',
                'name'   => 'Vertex Pharmaceuticals Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 46,
                'symbol' => 'KLAC',
                'name'   => 'KLA Corp',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 47,
                'symbol' => 'MRNA',
                'name'   => 'Moderna Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 48,
                'symbol' => 'REGN',
                'name'   => 'Regeneron Pharmaceuticals Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 49,
                'symbol' => 'MNST',
                'name'   => 'Monster Beverage Corp',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 50,
                'symbol' => 'KHC',
                'name'   => 'Kraft Heinz Co/The',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 51,
                'symbol' => 'KDP',
                'name'   => 'Keurig Dr Pepper Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 52,
                'symbol' => 'ASML',
                'name'   => 'ASML Holding NV',
                'class'  => 'American Depository Receipt - NY',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 53,
                'symbol' => 'MAR',
                'name'   => 'Marriott International Inc/MD',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 54,
                'symbol' => 'WBA',
                'name'   => 'Walgreens Boots Alliance Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Staples',
            ],
            [
                'id'     => 55,
                'symbol' => 'PDD',
                'name'   => 'Pinduoduo Inc ADR',
                'class'  => 'American Depository Receipt',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 56,
                'symbol' => 'WDAY',
                'name'   => 'Workday Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 57,
                'symbol' => 'ROST',
                'name'   => 'Ross Stores Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 58,
                'symbol' => 'EXC',
                'name'   => 'Exelon Corp',
                'class'  => 'Common Stock',
                'sector' => 'Utilities',
            ],
            [
                'id'     => 59,
                'symbol' => 'ALGN',
                'name'   => 'Align Technology Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 60,
                'symbol' => 'AEP',
                'name'   => 'American Electric Power Co Inc',
                'class'  => 'Common Stock',
                'sector' => 'Utilities',
            ],
            [
                'id'     => 61,
                'symbol' => 'MCHP',
                'name'   => 'Microchip Technology Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 62,
                'symbol' => 'CTSH',
                'name'   => 'Cognizant Technology Solutions Corp',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 63,
                'symbol' => 'EBAY',
                'name'   => 'eBay Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 64,
                'symbol' => 'IDXX',
                'name'   => 'IDEXX Laboratories Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 65,
                'symbol' => 'EA',
                'name'   => 'Electronic Arts Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 66,
                'symbol' => 'BIIB',
                'name'   => 'Biogen Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 67,
                'symbol' => 'CDNS',
                'name'   => 'Cadence Design Systems Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 68,
                'symbol' => 'SNPS',
                'name'   => 'Synopsys Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 69,
                'symbol' => 'DOCU',
                'name'   => 'DocuSign Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 70,
                'symbol' => 'LULU',
                'name'   => 'Lululemon Athletica Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 71,
                'symbol' => 'MTCH',
                'name'   => 'Match Group Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 72,
                'symbol' => 'CTAS',
                'name'   => 'Cintas Corp',
                'class'  => 'Common Stock',
                'sector' => 'Industrials',
            ],
            [
                'id'     => 73,
                'symbol' => 'XEL',
                'name'   => 'Xcel Energy Inc',
                'class'  => 'Common Stock',
                'sector' => 'Utilities',
            ],
            [
                'id'     => 74,
                'symbol' => 'ORLY',
                'name'   => "O'Reilly Automotive Inc",
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 75,
                'symbol' => 'DXCM',
                'name'   => 'Dexcom Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 76,
                'symbol' => 'PAYX',
                'name'   => 'Paychex Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 77,
                'symbol' => 'MRVL',
                'name'   => 'Marvell Technology Group Ltd',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 78,
                'symbol' => 'ALXN',
                'name'   => 'Alexion Pharmaceuticals Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 79,
                'symbol' => 'XLNX',
                'name'   => 'Xilinx Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 80,
                'symbol' => 'PCAR',
                'name'   => 'PACCAR Inc',
                'class'  => 'Common Stock',
                'sector' => 'Industrials',
            ],
            [
                'id'     => 81,
                'symbol' => 'NTES',
                'name'   => 'NetEase Inc ADR',
                'class'  => 'American Depository Receipt',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 82,
                'symbol' => 'SWKS',
                'name'   => 'Skyworks Solutions Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 83,
                'symbol' => 'ANSS',
                'name'   => 'ANSYS Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 84,
                'symbol' => 'PTON',
                'name'   => 'Peloton Interactive Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 85,
                'symbol' => 'VRSK',
                'name'   => 'Verisk Analytics Inc',
                'class'  => 'Common Stock',
                'sector' => 'Industrials',
            ],
            [
                'id'     => 86,
                'symbol' => 'TEAM',
                'name'   => 'Atlassian Corp PLC',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 87,
                'symbol' => 'FAST',
                'name'   => 'Fastenal Co',
                'class'  => 'Common Stock',
                'sector' => 'Industrials',
            ],
            [
                'id'     => 88,
                'symbol' => 'DLTR',
                'name'   => 'Dollar Tree Inc',
                'class'  => 'Common Stock',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 89,
                'symbol' => 'OKTA',
                'name'   => 'Okta Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 90,
                'symbol' => 'CPRT',
                'name'   => 'Copart Inc',
                'class'  => 'Common Stock',
                'sector' => 'Industrials',
            ],
            [
                'id'     => 91,
                'symbol' => 'SIRI',
                'name'   => 'Sirius XM Holdings Inc',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 92,
                'symbol' => 'SGEN',
                'name'   => 'Seagen Inc',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 93,
                'symbol' => 'MXIM',
                'name'   => 'Maxim Integrated Products Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 94,
                'symbol' => 'CDW',
                'name'   => 'CDW Corp/DE',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 95,
                'symbol' => 'VRSN',
                'name'   => 'VeriSign Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 96,
                'symbol' => 'SPLK',
                'name'   => 'Splunk Inc',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 97,
                'symbol' => 'CERN',
                'name'   => 'Cerner Corp',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 98,
                'symbol' => 'TCOM',
                'name'   => 'Trip.com Group Ltd ADR',
                'class'  => 'American Depository Receipt',
                'sector' => 'Consumer Discretionary',
            ],
            [
                'id'     => 99,
                'symbol' => 'INCY',
                'name'   => 'Incyte Corp',
                'class'  => 'Common Stock',
                'sector' => 'Health Care',
            ],
            [
                'id'     => 100,
                'symbol' => 'CHKP',
                'name'   => 'Check Point Software Technologies Ltd',
                'class'  => 'Common Stock',
                'sector' => 'Information Technology',
            ],
            [
                'id'     => 101,
                'symbol' => 'FOXA',
                'name'   => 'Fox Corp',
                'class'  => 'Common Stock',
                'sector' => 'Communication Services',
            ],
            [
                'id'     => 102,
                'symbol' =>'FOX',
                'name'   =>'Fox Corp',
                'class'  =>'Common Stock',
                'sector' =>'Communication Services',
            ],
        ];

        Stock::insert($stocks);
    }
}
