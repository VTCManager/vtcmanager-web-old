<?php

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
Route::post('/key/register/{key}', function($key) {
    return new \App\Http\Resources\RegisterClientKey(\App\ClientKey::find($key));
});
Route::get('/key/login/{key}', function($key) {
    return new \App\Http\Resources\LoginClientKey(\App\ClientKey::find($key));
});
