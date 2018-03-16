<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('historical', 'Cur_Controller@historical');
Route::get('cur_convert', 'Cur_Controller@cur_convert');
Route::get('multi_cur_convert', 'Cur_Controller@multi_cur_convert');
Route::get('top_currency_list', 'Cur_Controller@top_currency_list');
Route::post('updatecurrency', 'Cur_Controller@updatecurrency');
Route::post('multiupdatecurrency', 'Cur_Controller@multiupdatecurrency');
Route::post('historicalcurrency', 'Cur_Controller@historicalcurrency');
Route::get('/', function () {
    return view('welcome');
});