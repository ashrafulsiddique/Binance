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

//  Route::get('/', function () {
//       return view('homepage');
//   })->name('home');

//   Route::get('labs', function () {
//      return view('labs');
//   })->name('lab');


//   Route::get('/basic_exchange', function () {
//       return view('basic_exchange');
//   })->name('basic');

//   Route::get('/advance_exchange', function () {
//     return view('advance_exchange');
// })->name('advance');


Route::get('/', 'PageController@homepage')->name('homepage');
Route::get('/homepage', 'PageController@homepage')->name('homepage');

Route::get('/basic/{market}', 'PageController@basic_exchange')->name('basic');
Route::get('/advance', 'PageController@advance_exchange')->name('advance');
Route::get('/labs', 'PageController@labs')->name('lab');
Route::get('/register', 'PageController@register')->name('register');
Route::get('/login', 'PageController@login')->name('login');

Route::get('/balance', 'BasicController@balance')->name('balance');
Route::get('/deposits', 'BasicController@deposits')->name('deposits');
Route::get('/withdrawals', 'BasicController@withdrawals')->name('withdrawals');
Route::get('/transaction-history', 'BasicController@transaction')->name('transaction');
Route::get('/open-order', 'BasicController@open_order')->name('open-order');
Route::get('/order-history', 'BasicController@order_history')->name('order-history');
Route::get('/trade-history', 'BasicController@trade')->name('trade');
Route::get('/convert2bnb', 'BasicController@convert2bnb')->name('convert2bnb');
Route::get('/conversion-history', 'BasicController@conversion_history')->name('conversion-history');
Route::get('/myaccount', 'BasicController@myaccount')->name('myaccount'); 

Auth::routes();


