<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use simplePaginate;
use store;
use Redirect;

class Cur_Controller extends Controller
{
	
	public function widget(){
		
		return view('widget');
	}
	
	public function test( Request $request){
		$currency= $request->currency;
		
		$profile_info=DB::table('currency_profile')->where('currency',$currency)->get();		
        //print_r($profile_info);
        return view('profile', compact('profile_info'));
	}
public function cur_convert()
	{
		

		
         Cur_Controller::checkexist();


$data2=DB::table('curr_info')->where('date',date("Y-m-d"))->get();		
//print_r($data2);
$recent=Cur_Controller::recentconvert();
$cros=Cur_Controller::crossdate();
return view('cur_convert', compact('data2','recent','cros'));



}

protected function recentconvert(){
    $data=DB::table('recent_convert')->get();
    return $data;
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
	  $recentcheck=DB::table('recent_convert')->get();
            $rowcount = $recentcheck->count();

            if($rowcount<10){
                 DB::table('recent_convert')->insert(['currency_currency' => $convertion,  'amount'=> $amountval]);

            }else{
                   DB::select( DB::raw("DELETE FROM recent_convert LIMIT 1") );
                   DB::table('recent_convert')->insert(['currency_currency' => $convertion,  'amount'=> $amountval]);

            }
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

public function historical(){

        Cur_Controller::checkexist();
        $data2=DB::table('curr_info')->where('date',date("Y-m-d"))->get();      
        //print_r($data2);
        return view('historical', compact('data2'));


}

public function historicalcurrency(Request $request){
     Cur_Controller::checkexist();
     
         $datecheck=date("Y-m-d");
        if($request->currfrom!="none"){
           
            if($request->datetext!=null){
                $datecheck=$request->datetext;
            }
     $data2=DB::table('curr_info')->where('date',$datecheck)->get(); 
      foreach ($data2 as $values) {

       if($values->currency==$request->currfrom){
        $currency_from=$values->rate;
       }
               
            }
            $i=0;
      foreach ($data2 as $value) {

        $result=number_format((float)(floatval(1)*floatval($value->rate))/floatval($currency_from), 3, '.', '');
         $result2=number_format((float)(floatval(1)*floatval($currency_from))/floatval($value->rate), 3, '.', '');
            //
           $finalresult[$i][0]=$value->currency;
           $finalresult[$i][1]=$result;
           $finalresult[$i][2]=$result2;

            $i++;
            //echo "1  ".$request->currfrom." = ". $result." ".$value->currency."<br>"; 
               
            }
             $finalresult[0][4]=$datecheck;
        }
          else{
            echo "Select The Currency";
            $finalresult=null;
          }     
         
        //print_r($data2);
        //return view('historical', compact('data2'));
             return redirect('historical')->with('finalresult', $finalresult);


}


public function graphview(){
         Cur_Controller::checkexist();


$data2=DB::table('curr_info')->where('date',date("Y-m-d"))->get();      
//print_r($data2);
return view('graphview', compact('data2'));

}

public function graphcurrency(Request $request){
        // $data2=DB::table('curr_info')->whereBetween('date', [$request->datetext, $request->datetext2])->where('currency', $request->currto)->orWhere('currency',$request->currfrom)->get();
    
    $kk=1;
    
     
    
        if($request->timetext!="none"){

            if($request->timetext=="365"){
        $kk=24;
    }
    else if($request->timetext=="180"){
        $kk=12;
    }
    else if($request->timetext=="90"){
        $kk=6;
    }


             $data2 = DB::select( DB::raw("SELECT * FROM curr_info WHERE date >= ( CURDATE() - INTERVAL '$request->timetext' DAY ) AND (currency ='$request->currfrom' OR currency ='$request->currto') ORDER BY date") );
            
       $i=1;
       $j=0;
       $k=$kk;
       $cou=1;
       $spcheck=0;
       foreach($data2 as $values){
        if($cou==1){
        if($values->currency==$request->currfrom){
            $spcheck=1;
            break;
        }}$cou++;}

       foreach($data2 as $value){

        $v=$k-1;
        if($k%$kk==0||$v%$kk==0){

             

                 // $finalresult[$i][0]=$value->date;
                // $finalresult[$i][1]=number_format((float)(floatval(1)*floatval($value->))/floatval($currency_from), 3, '.', '');
        if($i==1){
            $currency_from=$value->rate;
            $i++;
        }
        else{
            $currency_to=$value->rate;
            if($spcheck==1){
            $finalresult[$j][0]=number_format((float)(floatval(1)*floatval($currency_to))/floatval($currency_from), 4, '.', '');}
            else{
            $finalresult[$j][0]=number_format((float)(floatval(1)*floatval($currency_from))/floatval($currency_to), 4, '.', '');

            }
             $finalresult[$j][1]=$value->date;
             $i=1;
             $j++;

        }

            //echo $value->currency." ".$value->date."<br>";
        $k++;
    }

        }
        $finalresult[0][7]=$j;
       return redirect('graphview')->with('finalresult', $finalresult);

        }

       
       
        
}

protected function crossdate(){
     $columnCurrency= array("AUD","CAD","CHF","CNY","EUR","GBP","INR","JPY","USD");
     $currdate=date("Y-m-d");
    $data=DB::table('curr_info')->where('date',$currdate)->get();
     $data2 = DB::select( DB::raw("SELECT * FROM curr_info WHERE date = '$currdate' AND (currency ='USD' OR currency ='GBP' OR currency ='EUR' OR currency ='CAD' OR currency ='CHF' OR currency ='AUD' OR currency ='INR' OR currency ='CNY' OR currency ='JPY')") );
$finalcros=null;
$i=0;
$k=1;
$j=1;
$finalcros[0][0]= $columnCurrency[0]; $finalcros[0][5]= $columnCurrency[5];
$finalcros[0][1]= $columnCurrency[1]; $finalcros[0][6]= $columnCurrency[6];
$finalcros[0][2]= $columnCurrency[2]; $finalcros[0][7]= $columnCurrency[7];
$finalcros[0][3]= $columnCurrency[3]; $finalcros[0][8]= $columnCurrency[8];
$finalcros[0][4]= $columnCurrency[4];


    foreach($data as $val){

        $finalcros[$j][0]=$val->currency;
        $finalcros[$j+1][0]='(Inverse)';
   
        $k=1;
        foreach($data2 as $val2){
            $finalcros[$j][$k]=number_format((float)(floatval(1)*floatval($val2->rate))/floatval($val->rate), 5, '.', '');
            $finalcros[$j+1][$k]=number_format((float)(floatval(1)*floatval($val->rate))/floatval($val2->rate), 5, '.', '');
            $k++;

        }
        $j=$j+2;
    }
    $finalcros[10][168]=$j-1;

    return $finalcros;
    


}

}