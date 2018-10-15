<?php

use Illuminate\Http\Request;
use App\User;

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


Route::post('/register','Api\AuthController@register');

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return  User::all();
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


