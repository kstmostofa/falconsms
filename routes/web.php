<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






Route::middleware(['is_admin'])->prefix('admin')->group(function () {
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/users/delete/{id}', 'UserController@destroy')->name('deleteUser');
    Route::get('/users/status/{id}', 'UserController@userStatus')->name('userStatus');
    Route::post('/users/store', 'UserController@store')->name('addUser');



    Route::get('/gateways', 'GatewayController@index')->name('gateways');
    Route::post('/gateway/store', 'GatewayController@store')->name('storeGateway');
    Route::get('/gateway/status/{id}', 'GatewayController@gatewayStatus')->name('gatewayStatus');
    Route::get('/gateway/delete/{id}', 'GatewayController@destroy')->name('deleteGateway');


    Route::get('/balance', 'BalanceController@index')->name('balance');


    Route::get('/order/history', 'OrderController@orderHistory')->name('orderHistory');

    Route::get('/settings/service', 'SettingController@service')->name('service');
    Route::post('/settings/service/add', 'SettingController@addService')->name('addService');
    Route::get('/setting/service/status/{id}', 'SettingController@serviceStatus')->name('updateService');
    Route::get('/setting/service/delete/{id}', 'SettingController@destroy')->name('deleteService');
    Route::any('/setting/payments-methods', 'SettingController@paymentMethod')->name('paymentMethod');
    // Route::get('/setting/payments-methods/add', 'SettingController@paymentMethod')->name('paymentMethod');
});

Route::middleware(['is_user'])->prefix('user')->group(function () {
    Route::get('/order', 'OrderController@index')->name('order');
    Route::get('/order/history', 'OrderController@orderHistory')->name('orderHistory');
    Route::get('/order/purchase', 'OrderController@purchase')->name('purchase');
    Route::get('/profile', 'UserController@myProfile')->name('myProfile');
    Route::post('/profile/password/{id}', 'UserController@changePassword')->name('changePassword');
    Route::get('/topup', 'TopUpController@index')->name('topup');
});
