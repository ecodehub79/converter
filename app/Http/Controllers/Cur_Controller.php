<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use simplePaginate;
use store;
use Redirect;

class Cur_Controller extends Controller
{
	
	public function test(){
		echo 'jhj';
	}
	public function cur_convert()
	{
		

		 Cur_Controller::checkexist();


$data2=DB::table('curr_info')->where('date',date("Y-m-d"))->get();		
//print_r($data2);
return view('cur_convert', compact('data2'));



}

public function updatecurrency(Request $request){
	// $result=0;
   // echo date("Y-m-d");
	 Cur_Controller::checkexist();

        if($request->abouttext!=null&&$request->currfrom!="none"&&$request->currto!="none"){
        	// $currency_from=0;
        	// $currency_to=0;
        	// $data=DB::table('curr_info')->where([['date', '=', date("Y-m-d")],['currency', '=', $request->currfrom],])->orWhere([['date', '=', date("Y-m-d")],['currency', '=', $request->currto],])get();
           $status = Cur_Controller::converter(date("Y-m-d"),$request->currfrom,$request->currto,$request->abouttext);
		   return redirect('cur_convert')->with('status', $status);
		}
		else{
			echo "fill the all value";
		}
		

}

public function top_currency_list()
    {
         Cur_Controller::checkexist();
         $all_currency=DB::table('cuur_amount')->orderBy('amount', 'desc')->get();
         return view('top_currency_list', compact('all_currency'));

    }
public function multi_cur_convert(){

    // $data=DB::table('tb_users')->get();
        // $data2=DB::table('tb_project')->get();
        

        //$data['data'] = DB::table('tb_lecture')->where($conditions)->simplePaginate(1);

       Cur_Controller::checkexist();

$data2=DB::table('curr_info')->where('date',date("Y-m-d"))->get();      
//print_r($data2);
return view('multi_cur_convert', compact('data2'));


}
public function multiupdatecurrency(Request $request){
    $datecheck=date("Y-m-d");
    Cur_Controller::checkexist();
        if($request->abouttext!=null){
                if($request->currfrom!="none"){
                    if($request->datetext!=null){
                        $datecheck=$request->datetext;
                    }
                    if($request->currto1!="none"){
                          $status =   Cur_Controller::converter($datecheck,$request->currfrom,$request->currto1,$request->abouttext);
						  
                    }
                    if($request->currto2!="none"){

                           $status .=   Cur_Controller::converter($datecheck,$request->currfrom,$request->currto2,$request->abouttext);
						   
                    }
                    if($request->currto3!="none"){
                         $status .=     Cur_Controller::converter($datecheck,$request->currfrom,$request->currto3,$request->abouttext);
                    }
                    if($request->currto4!="none"){
                       $status .=       Cur_Controller::converter($datecheck,$request->currfrom,$request->currto4,$request->abouttext);
                    }
                    if($request->currto5!="none"){
                      $status .=       Cur_Controller::converter($datecheck,$request->currfrom,$request->currto5,$request->abouttext);
                    }
					
					return redirect('multi_cur_convert')->with(['status' => $status]);
                   

                }

            
        }
        else{
            echo "please fill the box first";
        }
     

   
}
protected function checkexist(){
    $data=DB::table('curr_info')-> where('date',date("Y-m-d"))->get();
        //$data2=DB::table('curr_info')->groupBy('currency')->get();
        //echo date("Y-m-d");
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
}
protected function converter($datepara,$start,$end,$amountval){

     $convertion=$start."/".$end;
            //echo $convertion;
            $check=DB::table('cuur_amount')->where('currency_currency', $convertion)->get();
            $checkCount = $check->count();
            if($checkCount<1){
            DB::table('cuur_amount')->insert(['currency_currency' => $convertion,  'amount'=> '1']);

            }
            else{

                foreach($check as $val){
                    if($val->currency_currency==$convertion){
                        $update_amount=$val->amount+1;
                         DB::table('cuur_amount')->where('currency_currency', $convertion)->update(['amount' =>$update_amount]);
                    }
                }
               
            }


            $data=DB::table('curr_info')->where('date',$datepara)->get();
            foreach ($data as $value) {
                if($value->currency==$start){
                    $currency_from=$value->rate;
                    //echo $value->rate."<br>";
                }
                if($value->currency==$end){
                    $currency_to=$value->rate;
                    //echo $value->rate."<br>";
                }
            }
            $result=number_format((float)(floatval($amountval)*floatval($currency_to))/floatval($currency_from), 3, '.', '');
            //
            
            return "<h3>".$amountval." ".$start." = ". $result." ".$end."</h3>"."<br>";
			
			//$status= $amountval." ".$start." = ". $result." ".$end."<br>";
             
			//return redirect('cur_convert')->with('status', $status);
}

}