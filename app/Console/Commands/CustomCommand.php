<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
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
}
