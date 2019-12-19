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

//Route::get('punten/search/{minPrijs}/{maxPrijs}','LaptopController@searchService');
//Route::get('punten/uploadTest/{naam}/{voornaam}/{studentennummer}/{punten}/{vak}/{titel}/{maximum}','PuntenToevoegenController@uploadTest');
//Route::post('punten/uploadTest/{naam}/{voornaam}/{studentennummer}/{punten}/{vak}/{titel}/{maximum}','PuntenToevoegenController@uploadPunten');
Route::post('punten/uploadTest','PuntenToevoegenController@uploadPunten');

//body: JSON.stringify(data) // body data type must match "Content-Type" header