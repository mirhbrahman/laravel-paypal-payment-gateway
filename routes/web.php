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

Route::get('/', function () {
    return view('pay_with_paypal');
})->name('home');

Route::post('/payment/add-funds/paypal', 'PaymentController@payWithPaypal')->name('payment');
Route::get('/status', 'PaymentController@getPaymentStatus')->name('status');