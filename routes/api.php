<?php

use Illuminate\Http\Request;

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

Route::post('/login', 'Auth\LoginController@authenticate');

//Create
Route::post('/createEvaluator', 'EvaluatorController@storeEvaluator');
Route::post('/createCategory', 'CategoryController@storeCategory');
Route::post('/createEvaluated', 'EvaluatedController@storeEvaluated');

//Obtener lista de:
Route::get('/getCategories', 'CategoryController@getCategories');
Route::get('/getEvaluator', 'EvaluatorController@getEvaluator');
Route::get('/getEvaluated', 'EvaluatedController@getEvaluated');
