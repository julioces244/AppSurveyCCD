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

Route::get('/getEvaluatedAll', 'EvaluatedController@getEvaluatedAll');

Route::get('/getEvaluated/{idcategory}', 'EvaluatedController@getEvaluated');
Route::get('/getEvaluated2/{idcategory}', 'EvaluatedController@getEvaluated2');

Route::get('/getEvaluatedDirectivo', 'EvaluatedController@getEvaluatedDirectivo');
Route::get('/getEvaluatedSoportelima', 'EvaluatedController@getEvaluatedSoportelima');
Route::get('/getEvaluatedSoportepisco', 'EvaluatedController@getEvaluatedSoportepisco');
Route::get('/getEvaluatedJefeaprendizaje', 'EvaluatedController@getEvaluatedJefeaprendizaje');
Route::get('/getEvaluatedJededigitaltecnologia', 'EvaluatedController@getEvaluatedJededigitaltecnologia');
Route::get('/getEvaluatedEspecialistaaprendizaje', 'EvaluatedController@getEvaluatedEspecialistaaprendizaje');
Route::get('/getEvaluatedEspecialistadigital', 'EvaluatedController@getEvaluatedEspecialistadigital');
Route::get('/getEvaluatedEspecialistatecnologia', 'EvaluatedController@getEvaluatedEspecialistatecnologia');
Route::get('/getEvaluatedCoordinadoraprendizaje', 'EvaluatedController@getEvaluatedCoordinadoraprendizaje');
Route::get('/getEvaluatedCoordinadordigital', 'EvaluatedController@getEvaluatedCoordinadordigital');
Route::get('/getEvaluatedCoordinadortecnologia', 'EvaluatedController@getEvaluatedCoordinadortecnologia');
Route::get('/getEvaluatedAcompañanteaprendizaje', 'EvaluatedController@getEvaluatedAcompañanteaprendizaje');
Route::get('/getEvaluatedAcompañantedigital', 'EvaluatedController@getEvaluatedAcompañantedigital');
Route::get('/getEvaluatedAcompañantetecnologia', 'EvaluatedController@getEvaluatedAcompañantetecnologia');


Route::post('/storeScore/{idevaluador}','EvaluatorController@storeScore');
