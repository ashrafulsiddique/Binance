<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   
  public function homepage()
  {
   
    $bnb_summary = array('percent'=>'0.03%','currency'=>'0.0259238','to_currency'=>'$42.05','volume'=>'7192.78979');
    $local = array('BNB/BTC'=>'BNB/BTC');

    $eos_summary = array('percent'=>'0.02%','currency'=>'0.0659237','to_currency'=>'$12.05','volume'=>'6192.78979');
    $local2 = array('EOS/BTC'=>'EOS/BTC');

    $xlm_summary = array('percent'=>'3.02%','currency'=>'0.0759233','to_currency'=>'$0.05','volume'=>'3192.78979');
    $local3 = array('XLM/BTC'=>'XLM/BTC');

    $mft_summary = array('percent'=>'0.04%','currency'=>'0.0359235','to_currency'=>'$2.05','volume'=>'97192.78979');
    $local4 = array('MFT/BTC'=>'MFT/BTC');

    $nano_summary = array('percent'=>'-0.02%','currency'=>'0.0359232','to_currency'=>'$3.05','volume'=>'192.78979');
    $local5 = array('NANO/BTC'=>'NANO/BTC');

    $favorites = array(
                    array('pair'=>'ETH/BTC','coin'=>'Ethereum','last_price_currency'=>'0.0359237','last_price_to_currency'=>'$242.05','change'=>'0.05%','high'=>'0.0000246','low'=>'0.0000329','volume'=>'7192.78979'),
                    array('pair'=>'NANO/BNB','coin'=>'NANO','last_price_currency'=>'0.035924','last_price_to_currency'=>'$242.05','change'=>'0.04%','high'=>'0.0000348','low'=>'0.0000529','volume'=>'73192.78979'),
                    array('pair'=>'EOS/ETC','coin'=>'EOS','last_price_currency'=>'0.0025925','last_price_to_currency'=>'$242.05','change'=>'0.06%','high'=>'0.0000546','low'=>'0.0000327','volume'=>'17192.78979')
                  );
    $bnb = array(
                    array('pair'=>'ETH/BNB','coin'=>'Ethereum','last_price_currency'=>'0.0359237','last_price_to_currency'=>'$242.05','change'=>'0.05%','high'=>'0.0000246','low'=>'0.0000329','volume'=>'7192.78979'),
                    array('pair'=>'NANO/BNB','coin'=>'NANO','last_price_currency'=>'0.035924','last_price_to_currency'=>'$242.05','change'=>'0.04%','high'=>'0.0000348','low'=>'0.0000529','volume'=>'73192.78979'),
                    array('pair'=>'EOS/BNB','coin'=>'EOS','last_price_currency'=>'0.0025925','last_price_to_currency'=>'$242.05','change'=>'0.06%','high'=>'0.0000546','low'=>'0.0000327','volume'=>'17192.78979')
                  );
    $btc = array(
                    array('pair'=>'ETH/BTC','coin'=>'Ethereum','last_price_currency'=>'0.0359237','last_price_to_currency'=>'$242.05','change'=>'0.05%','high'=>'0.0000246','low'=>'0.0000329','volume'=>'7192.78979'),
                    array('pair'=>'NANO/BTC','coin'=>'NANO','last_price_currency'=>'0.035924','last_price_to_currency'=>'$242.05','change'=>'0.04%','high'=>'0.0000348','low'=>'0.0000529','volume'=>'73192.78979'),
                    array('pair'=>'EOS/BTC','coin'=>'EOS','last_price_currency'=>'0.0025925','last_price_to_currency'=>'$242.05','change'=>'0.06%','high'=>'0.0000546','low'=>'0.0000327','volume'=>'17192.78979')
                  );
    $etc = array(
                    array('pair'=>'ETH/ETC','coin'=>'Ethereum','last_price_currency'=>'0.0359237','last_price_to_currency'=>'$242.05','change'=>'0.05%','high'=>'0.0000246','low'=>'0.0000329','volume'=>'7192.78979'),
                    array('pair'=>'NANO/ETC','coin'=>'NANO','last_price_currency'=>'0.035924','last_price_to_currency'=>'$242.05','change'=>'0.04%','high'=>'0.0000348','low'=>'0.0000529','volume'=>'73192.78979'),
                    array('pair'=>'EOS/ETC','coin'=>'EOS','last_price_currency'=>'0.0025925','last_price_to_currency'=>'$242.05','change'=>'0.06%','high'=>'0.0000546','low'=>'0.0000327','volume'=>'17192.78979')
                  );
    $usdt = array(
                    array('pair'=>'ETH/USDT','coin'=>'Ethereum','last_price_currency'=>'0.0359237','last_price_to_currency'=>'$242.05','change'=>'0.05%','high'=>'0.0000246','low'=>'0.0000329','volume'=>'7192.78979'),
                    array('pair'=>'NANO/USDT','coin'=>'NANO','last_price_currency'=>'0.035924','last_price_to_currency'=>'$242.05','change'=>'0.04%','high'=>'0.0000348','low'=>'0.0000529','volume'=>'73192.78979'),
                    array('pair'=>'EOS/USDT','coin'=>'EOS','last_price_currency'=>'0.0025925','last_price_to_currency'=>'$242.05','change'=>'0.06%','high'=>'0.0000546','low'=>'0.0000327','volume'=>'17192.78979')
                  );


    return view('homepage',[ 'bnb_summary' => $bnb_summary ,
                              'eos_summary' => $eos_summary ,
                              'xlm_summary' => $xlm_summary ,
                              'mft_summary' => $mft_summary ,
                              'nano_summary' => $nano_summary ,
                              'favorites' => $favorites , 
                              'bnb' => $bnb , 'btc' => $btc ,
                              'etc' => $etc , 'usdt' => $usdt ,
                              'local'=>$local, 'local2'=>$local2, 
                              'local3'=>$local3,  'local4'=>$local4,
                              'local5'=>$local5]);

  }


  public function labs()
  {
    return view('labs');

  }

  public function basic_exchange($market)
  
  {
    $market_group = array(
                    array('price'=>'6493.11869','amount'=>'0.118697','total'=>'144.88021'),
                    array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                    array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                    array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                    array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                    array('price'=>'5454.544','amount'=>'0.54654','total'=>'878.55422')
                  );
    $market_group2 = array(
                    array('price'=>'84747.11869','amount'=>'0.24554','total'=>'5564.654654'),
                    array('price'=>'797564.1368','amount'=>'0.56464','total'=>'21545.544545'),
                    array('price'=>'879423.3131','amount'=>'0.5445','total'=>'57745.54544'),
                    array('price'=>'5874.6464','amount'=>'0.464768','total'=>'5789.0878'),
                    array('price'=>'8693.6474','amount'=>'0.243636','total'=>'587690.57569')

                  );


    $market_group3 = array(
                    array('price'=>'4164.5475','amount'=>'0.757','total'=>'4343.7436'),
                    array('price'=>'346376.5757','amount'=>'0.56464','total'=>'7767.54457'),
                    array('price'=>'476767.7564','amount'=>'0.3434','total'=>'97473.4363'),
                    array('price'=>'76657.74','amount'=>'0.434','total'=>'74634.52543'),
                    array('price'=>'7657.587','amount'=>'0.4343','total'=>'74324.6573')

      );

    $market_group4 = array(
                    array('price'=>'2465.678','amount'=>'0.4253276y','total'=>'64564.242'),
                    array('price'=>'464.7486','amount'=>'0.3647','total'=>'26748.47456'),
                    array('price'=>'5479464.48','amount'=>'0.758','total'=>'256356.586'),
                    array('price'=>'854694.909','amount'=>'0.860','total'=>'586.3634'),
                    array('price'=>'521.5890','amount'=>'0.3678','total'=>'89709.4757'),
                    array('price'=>'854694.909','amount'=>'0.860','total'=>'586.3634'),
                    array('price'=>'521.5890','amount'=>'0.3678','total'=>'89709.4757')

);


    $market_group5 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.4253276','change'=>'2.02%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3647','change'=>'-3.14%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.758','change'=>'8.02%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.860','change'=>'4.0222%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3678','change'=>'5.025%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.758','change'=>'4.202%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.860','change'=>'9.024%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3678','change'=>'-4.565%')

);

   $market_group6 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.6778','change'=>'0.02%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.4364','change'=>'-4.14%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.767667','change'=>'4.02%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.4364676','change'=>'6.022%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.8768','change'=>'1.025%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.797','change'=>'2.202%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.9898','change'=>'3.024%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.676','change'=>'-9.565%')

);

   $market_group7 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.8869','change'=>'1.464%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.464','change'=>'-6.464%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.97979','change'=>'2.436%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.797','change'=>'2.4364%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.7979','change'=>'1.46%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.446','change'=>'6.2342%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.870','change'=>'7.044%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3564','change'=>'-9.636%')

);

   $market_group8 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.8869','change'=>'1.464%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.464','change'=>'-6.464%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.97979','change'=>'2.436%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.797','change'=>'2.4364%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.7979','change'=>'1.46%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.446','change'=>'6.2342%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.870','change'=>'7.044%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3564','change'=>'-9.636%')

);

  $market_group9 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.8869','change'=>'1.464%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.464','change'=>'-6.464%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.97979','change'=>'2.436%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.797','change'=>'2.4364%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.7979','change'=>'1.46%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.446','change'=>'6.2342%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.870','change'=>'7.044%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3564','change'=>'-9.636%')

);



   $market_group10 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.2523','change'=>'89.47%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.53467','change'=>'-4.475%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.7545','change'=>'47.78%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.7890','change'=>'2.75%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.0987','change'=>'36.34%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.7986','change'=>'47.3467%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.789','change'=>'78.587%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.789','change'=>'-1.3346%')

);

   $market_group11 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.2523','change'=>'89.47%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.53467','change'=>'-4.475%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.7545','change'=>'47.78%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.7890','change'=>'2.75%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.0987','change'=>'36.34%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.7986','change'=>'47.3467%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.789','change'=>'78.587%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.789','change'=>'-1.3346%')

);

   $market_group12 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.2525','change'=>'1.47%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.7587','change'=>'-4.475%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.474','change'=>'34.78%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.2423','change'=>'1.75%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.6346','change'=>'9.34%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.8670','change'=>'7.3467%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.215','change'=>'0.587%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.675','change'=>'-2.3346%')

);


   $market_group13 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.3253','change'=>'-6.22%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.63476','change'=>'-0.53%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.875687','change'=>'8.465%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.353','change'=>'8.454%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3632','change'=>'67.4342%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.23536','change'=>'5.242%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.43674','change'=>'1.245%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3533','change'=>'-2.25%')

);

   $market_group14 = array(
                    array('pair'=>'ADA/BTC','Price'=>'0.3253','change'=>'-6.22%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.63476','change'=>'-0.53%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.875687','change'=>'8.465%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.353','change'=>'8.454%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3632','change'=>'67.4342%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.23536','change'=>'5.242%'),
                    array('pair'=>'ADA/BTC','Price'=>'0.43674','change'=>'1.245%'),
                    array('pair'=>'BAT/BTC','Price'=>'0.3533','change'=>'-2.25%'),
                    array('pair'=>'BCC/BTC','Price'=>'0.55442','change'=>'6.56437%')

);
   $market_group15 = array(
                    array('price'=>'6630.01','change'=>'0.3253','time'=>'18:34:09'),
                    array('price'=>'6630.35','change'=>'0.63476','time'=>'18:35:10'),
                    array('price'=>'6634.90','change'=>'0.875687','time'=>'18:32:40'),
                    array('price'=>'6632.80','change'=>'0.353','time'=>'18:35:50'),
                    array('price'=>'6631.01','change'=>'0.3632','time'=>'18:33:40'),
                    array('price'=>'6634.20','change'=>'0.23536','time'=>'18:32:10'),
                    array('price'=>'6633.50','change'=>'0.43674','time'=>'18:31:11'),
                    array('price'=>'6637.06','change'=>'0.3533','time'=>'18:30:20'),
                    array('price'=>'6635.90','change'=>'0.55442','time'=>'18:32:45')

);


   $market_activity = array(
                    array('pair'=>'CDT/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'SKY/BTC','time'=>'12:12:00','status'=>'New 24h High'),
                    array('pair'=>'NXS/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'GVT/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'BNB/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'NANO/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'REQ/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'VIA/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'AION/BTC','time'=>'12:34:00','status'=>'New 24h High'), 
                    array('pair'=>'ELF/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'QTUM/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'KMD/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'LRC/BTC','time'=>'12:34:00','status'=>'New 24h High'),
                    array('pair'=>'BTS/BTC','time'=>'02:34:00','status'=>'New 24h Low')

);

$open_order = array(
  array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'ABCD','side'=>'fcdx','price'=>'6674.80','amount'=>'0.131415','filled'=>'15%','total'=>'0.17354480','trigger_conditions'=>'trdr5t'),
  array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','side'=>'ygy','price'=>'6674.80','amount'=>'0.131415','filled'=>'12%','total'=>'0.17354480','trigger_conditions'=>'trdr5t'),
  array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'CDER','side'=>'ufu','price'=>'6674.80','amount'=>'0.131415','filled'=>'0.23%','total'=>'0.17354480','trigger_conditions'=>'trdr5t')
);



$order_history = array(
  array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'ABCD','side'=>'fcdx','average'=>'764.8','price'=>'6674.80','amount'=>'0.131415','filled'=>'15%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'ASSl'),
  array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','side'=>'ygy','average'=>'764.8','price'=>'6674.80','amount'=>'0.131415','filled'=>'12%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'WFWF'),
  array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'CDER','side'=>'ufu','average'=>'764.8','price'=>'6674.80','amount'=>'0.131415','filled'=>'0.23%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'WGFG')
);




    return view('basic_exchange', ['market' => $market_group, 'market2' => $market_group2,'market3' => $market_group3, 
                                    'market4' => $market_group4, 'market5' => $market_group5,
                                    'market6' => $market_group6, 'market7' => $market_group7,
                                    'market8' => $market_group8, 'market9' => $market_group9,
                                    'market10' => $market_group10, 'market11' => $market_group11,
                                    'market12' => $market_group12, 'market13' => $market_group13,
                                    'market14' => $market_group14, 'market15' => $market_group15,
                                    'recent_market' => $market_activity, 'open_order' => $open_order,
                                    'order_history' => $order_history]);

  }
  public function advance_exchange()
  {

  $open = array(
      array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'ABCD','side'=>'fcdx','price'=>'6674.80','amount'=>'0.131415','filled'=>'15%','total'=>'0.17354480','trigger_conditions'=>'trdr5t'),
      array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','side'=>'ygy','price'=>'6674.80','amount'=>'0.131415','filled'=>'12%','total'=>'0.17354480','trigger_conditions'=>'trdr5t'),
      array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'CDER','side'=>'ufu','price'=>'6674.80','amount'=>'0.131415','filled'=>'0.23%','total'=>'0.17354480','trigger_conditions'=>'trdr5t')
    );


  $advance_order_history = array(
      array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'ABCD','side'=>'fcdx','average'=>'764.8','price'=>'6674.80','amount'=>'0.131415','filled'=>'15%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'ASSl'),
      array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','side'=>'ygy','average'=>'764.8','price'=>'6674.80','amount'=>'0.131415','filled'=>'12%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'WFWF'),
      array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'CDER','side'=>'ufu','average'=>'764.8','price'=>'6674.80','amount'=>'0.131415','filled'=>'0.23%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'WGFG')
    );
  $trade_history = array(
      array('time'=>'12:20:10','pair'=>'NXS/BTC','type'=>'ABCD','price'=>'6674.80','filled'=>'15%','free'=>'0.17354480','total'=>'0.1445'),
      array('time'=>'12:20:10','pair'=>'NXS/BTC','type'=>'BAB','price'=>'6674.80','filled'=>'12%','free'=>'0.17354480','total'=>'.011124'),
      array('time'=>'12:20:10','pair'=>'NXS/BTC','type'=>'CDER','price'=>'6674.80','filled'=>'0.23%','free'=>'0.17354480','total'=>'0.14544')
    );


  $funds = array(
          array('coin'=>'BTC','total_balance'=>'.01245','available_balance'=>'ABCD','in_order'=>'6674.80','btc_value'=>'CDE'),
          array('coin'=>'BTC','total_balance'=>'.01245','available_balance'=>'ABCD','in_order'=>'6674.80','btc_value'=>'CDE'),
          array('coin'=>'BTC','total_balance'=>'.01245','available_balance'=>'ABCD','in_order'=>'6674.80','btc_value'=>'CDE')
    );


    $advance_market = array(
                    array('price'=>'6493.11869','amount'=>'0.118697','total'=>'144.88021'),
                    array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                    array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                    array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                    array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                    array('price'=>'5454.544','amount'=>'0.54654','total'=>'878.55422')
    );


  $advance_market2 = array(
                    array('price'=>'6493.11869','amount'=>'0.118697','total'=>'144.88021'),
                    array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                    array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                    array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485')
                  
);


$advance_market3 = array(
                  array('price'=>'6493.11869','amount'=>'0.118697','total'=>'144.88021'),
                  array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                  array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                  array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                  array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                  array('price'=>'5454.544','amount'=>'0.54654','total'=>'878.55422')
);
$advance_market4 = array(
                  array('price'=>'6493.11869','amount'=>'0.118697','total'=>'144.88021'),
                  array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                  array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                  array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                  array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                  array('price'=>'5454.544','amount'=>'0.54654','total'=>'878.55422')
);



$advance_market5 = array(
                  array('price'=>'6493.11869','amount'=>'0.118697','total'=>'144.88021'),
                  array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                  array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                  array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                  array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                  array('price'=>'5454.544','amount'=>'0.54654','total'=>'878.55422'),
                  array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                  array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                  array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                  array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                  array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                  array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                  array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                  array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644'),
                  array('price'=>'5978.1368','amount'=>'0.9896964','total'=>'1855.05485'),
                  array('price'=>'1333.3131','amount'=>'0.415445','total'=>'152.254554'),
                  array('price'=>'1755.555','amount'=>'0.789744','total'=>'165.5464'),
                  array('price'=>'1564.6744','amount'=>'0.57446','total'=>'454.54644')
                 
);


    
    
    return view('advance_exchange',['open' => $open,'advance_order_history' => $advance_order_history,
                'trade_history' => $trade_history, 'funds' => $funds, 'advance_market' => $advance_market,
                'advance_market2' => $advance_market2, 'advance_market3' => $advance_market3,
                'advance_market4' => $advance_market4,'advance_market5' => $advance_market5]);

  }

  
  public function login()
  {
    return view('login');

  }


  public function register()
  {
    return view('register');

  }



}
