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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['middleware' => ['api', 'cors'], 'prefix' => 'v1'], function(){
    Route::apiResource('banca', 'BancaController');
    Route::apiResource('orgao', 'OrgaoController');
    Route::apiResource('programa', 'ProgramaController');

    Route::get('arvores-assuntos/orgao/{orgao_id}/banca/{banca_id}', 'AssuntoController@getArvoresByOrgaoAndBanca');
});
