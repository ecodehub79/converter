<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use simplePaginate;
use store;
use Redirect;

class Cur_Controller extends Controller
{
	
	 protected function test(){
		echo 'hh';
	}
	
	public function test2(){
		Cur_Controller::test();
	}
	
	public function cur_convert()
	{
		

		// $data=DB::table('tb_users')->get();
		// $data2=DB::table('tb_project')->get();
		

		//$data['data'] = DB::table('tb_lecture')->where($conditions)->simplePaginate(1);

		$data=DB::table('curr_info')-> where('date',date("Y-m-d"))->get();
		//$data2=DB::table('curr_info')->groupBy('currency')->get();

		$wordCount = $data->count();
		//echo "<h1>".$wordCount."</h1><br>";
		if($wordCount<1){


			$endpoint = 'convert';
        $access_key = '32941367b1cae31a6eaedc434b865747';
        $from = 'USD';
        $to = 'EUR';
        $amount = 10;

// initialize CURL:
$ch = curl_init('http://data.fixer.io/api/latest?access_key=7e0450150a66a8135bc414c2b1c4f96b&base=EUR');   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// get the JSON data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$conversionResult = json_decode($json, true);

// access the conversion result
$i=1;
foreach ($conversionResult['rates'] as $key => $value) {

    //echo "id ".$i."Key: ".$key."Value: ".$value."<br>";
    DB::table('curr_info')->insert(['currency' => $key,  'rate'=> $value, 'date'=>date("Y-m-d")]);
    $i++;
}

		}


$data2=DB::table('curr_info')->where('date',date("Y-m-d"))->get();		
//print_r($data2);
return view('cur_convert', compact('data2'));



}

public function updatecurrency(Request $request){
	// $result=0;

	$datam=DB::table('curr_info')-> where('date',date("Y-m-d"))->get();
		//$data2=DB::table('curr_info')->groupBy('currency')->get();

		$wordCount = $datam->count();
		//echo "<h1>".$wordCount."</h1><br>";
		if($wordCount<1){


			$endpoint = 'convert';
        $access_key = '32941367b1cae31a6eaedc434b865747';
        $from = 'USD';
        $to = 'EUR';
        $amount = 10;

// initialize CURL:
$ch = curl_init('http://data.fixer.io/api/latest?access_key=7e0450150a66a8135bc414c2b1c4f96b&base=EUR');   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// get the JSON data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$conversionResult = json_decode($json, true);

// access the conversion result
$i=1;
foreach ($conversionResult['rates'] as $key => $value) {

    //echo "id ".$i."Key: ".$key."Value: ".$value."<br>";
    DB::table('curr_info')->insert(['currency' => $key,  'rate'=> $value, 'date'=>date("Y-m-d")]);
    $i++;
}

		}

        if($request->abouttext!=null&&$request->currfrom!="none"&&$request->currto!="none"){
        	// $currency_from=0;
        	// $currency_to=0;
        	// $data=DB::table('curr_info')->where([['date', '=', date("Y-m-d")],['currency', '=', $request->currfrom],])->orWhere([['date', '=', date("Y-m-d")],['currency', '=', $request->currto],])get();
        	$data=DB::table('curr_info')->where('date',date("Y-m-d"))->get();
        	foreach ($data as $value) {
        		if($value->currency==$request->currfrom){
        			$currency_from=$value->rate;
        			//echo $value->rate."<br>";
        		}
        		if($value->currency==$request->currto){
        			$currency_to=$value->rate;
        			//echo $value->rate."<br>";
        		}
        	}
        	$result=number_format((float)(floatval($request->abouttext)*floatval($currency_to))/floatval($currency_from), 3, '.', '');
        	//

        	$status=  $request->abouttext." ".$request->currfrom." = ". $result." ".$request->currto;
			//return view('cur_convert', compact('result'));
			//return redirect('cur_convert');
			return redirect('cur_convert')->with('status', $status);
			
		}
		else{
			echo "fill the all value";
		}
		

}
}