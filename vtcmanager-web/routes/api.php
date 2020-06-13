<?php

use App\Http\Controllers\APIJobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/job/delivered', 'APIJobController@delivered');
Route::middleware('auth:api')->post('/job/started', 'APIJobController@started');
Route::middleware('auth')->get('/job/{id}', 'APIJobController@show');

//Route::post('/key/{key}/job/start', "APIJobController@start");
//Route::post('/key/{key}/job/delivered', "APIJobController@delivered");
