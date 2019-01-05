<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{

	public function balance(){

			$bal_history = array(
				array('coin'=>'ATD','name'=>'Atidum','total_balance'=>'0.00011','available_balance'=>'1132','in_order'=>'No'),
				
				);
			


		return view('loggedin.balance', ['bal_history' => $bal_history,]);
	}

	public function deposits(){
			 return view('loggedin/deposits');
		}
		
	public function withdrawals(){
			 return view('loggedin/withdrawals');
		}

	public function transaction(){
			
		$Dep_history = array(
			array('status'=>'YES','coin'=>'CDT/BTC','amount'=>'1313','date'=>'14/11/2018','information'=>'No'),
			array('status'=>'YES','coin'=>'NXS/BTC','amount'=>'254','date'=>'14/11/2018','information'=>'YES'),
			array('status'=>'YES','coin'=>'CDT/BTC','amount'=>'585','date'=>'14/11/2018','information'=>'No')
		  );
		
		  
		$wit_history = array(
			array('status'=>'YES','coin'=>'NXS/BTC','amount'=>'1313','date'=>'14/11/2018','information'=>'No'),
			array('status'=>'YES','coin'=>'CDT/BTC','amount'=>'254','date'=>'14/11/2018','information'=>'YES'),
			array('status'=>'YES','coin'=>'NXS/BTC','amount'=>'585','date'=>'14/11/2018','information'=>'No')
		  );
        

		return view('loggedin.transaction',['Dep_history' => $Dep_history,'wit_history' => $wit_history]);
	}
	public function open_order(){
	

		$orders = array(
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'ABCD','side'=>'fcdx','price'=>'6674.80','amount'=>'0.131415','filled'=>'15%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','action'=>'YES'),
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','side'=>'ygy','price'=>'6674.80','amount'=>'0.131415','filled'=>'12%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','action'=>'YES'),
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'CDER','side'=>'ufu','price'=>'6674.80','amount'=>'0.131415','filled'=>'0.23%','total'=>'0.17354480','trigger_conditions'=>'trdr5t','action'=>'NO')
		  );

		return view('loggedin.openorder',['orders' => $orders]);

	}
	public function order_history(){

		$history = array(
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'ABCD','side'=>'fcdx','average'=>'2%','price'=>'6674.80','filled'=>'42468','amount'=>'0.131415','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'def','operation'=>'avf'),
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','side'=>'ygy','average'=>'1%','price'=>'6674.80','filled'=>'27621','amount'=>'0.131415','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'Abc','operation'=>'adf'),
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'CDER','side'=>'ufu','average'=>'3%','price'=>'6674.80','filled'=>'42165','amount'=>'0.131415','total'=>'0.17354480','trigger_conditions'=>'trdr5t','status'=>'ikl','operation'=>'ada')
		  );


		return view('loggedin.order-history',['history'=> $history]);
	}
	public function trade(){

		$Trade = array(
			array('date'=>'14/11/2018','pair'=>'CDT/BTC','type'=>'ABCD','price'=>'6674.80','filled'=>'42468','fee'=>'0.131415','total'=>'0.17354480'),
			array('date'=>'14/11/2018','pair'=>'NXS/BTC','type'=>'BAB','price'=>'6674.80','filled'=>'27621','fee'=>'0.131415','total'=>'0.17354480'),
			array('date'=>'14/11/2018','pair'=>'CDT/BTC','type'=>'CDER','price'=>'6674.80','filled'=>'42165','fee'=>'0.131415','total'=>'0.17354480')
		  );

		return view('loggedin.trade',['Trade'=> $Trade]);
	}

	public function convert2bnb(){
		  
		$conver_history = array(
			array('coin'=>'BTC','name'=>'ABCD','available_balance'=>'0.1111','btc_value'=>'0.1111','bnb_value'=>'0.888'),
			array('coin'=>'BNB','name'=>'ABCD','available_balance'=>'0.4444','btc_value'=>'0.555','bnb_value'=>'0.333'),
			array('coin'=>'CDT','name'=>'ABCD','available_balance'=>'0.7777','btc_value'=>'0.444','bnb_value'=>'0.555')
		  );


		return view('loggedin.convert2bnb',['conver_history'=> $conver_history]);
	}

	public function conversion_history(){


		$con_history = array(
			array('date'=>'14/11/2018','free'=>'ABCD','converted'=>'CDT','operation'=>'NO'),
			array('date'=>'14/11/2018','free'=>'ABCD','converted'=>'NXS','operation'=>'NO'),
			array('date'=>'14/11/2018','free'=>'ABCD','converted'=>'CDT','operation'=>'YES')
		  );

		return view('loggedin.conversion-history',['con_history'=> $con_history]);
	}

	public function myaccount(){
		return view('loggedin.myaccount');
 }




}