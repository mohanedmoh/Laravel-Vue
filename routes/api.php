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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/login', 'Users@signin')->name('Signin');
Route::post('/register', 'Users@register')->name('register');

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/getUser', 'Users@getUser')->name('getUser');
    Route::get('/Users', 'Users@records');
    Route::post('/Users', 'Users@register');
    Route::put('/Users/{id}', 'Users@set');
    Route::delete('/Users/{id}', 'Users@remove');
});




