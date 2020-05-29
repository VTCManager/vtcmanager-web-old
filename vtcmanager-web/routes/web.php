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
    if(Auth::check()){
        return redirect("/interface");
    }else{
        return view('index');
    }
});

Auth::routes(['verify' => true]);

Route::get('/interface', 'HomeController@index')->middleware('verified');
Route::get('/interface/logbook', 'LogbookController@index')->middleware('verified');
Route::get('/interface/account/settings/', 'SettingsController@index')->name('settings')->middleware('verified');
Route::post('/interface/account/settings/create-client-key', 'SettingsController@create_client_key')->name('create-client-key')->middleware('verified');
Route::delete('/interface/account/settings/delete-client-key/{key}', 'SettingsController@destroy_client_key')->name('delete-client-key')->middleware('verified');
Route::get('/login/steam', 'Auth\LoginController@redirectToProvider');
Route::get('/login/steam/callback', 'Auth\LoginController@handleProviderCallback');