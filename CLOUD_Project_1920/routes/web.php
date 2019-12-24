<?php

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
    //return view('zoekformulier_studenten');
    
});

//Route::get('/user','DemoController@userDemo')->name('user');
//Route::get('/admin','DemoController@adminDemo')->name('admin');

Route::group(['middleware'=>['auth']],function() {
    Route::get('/user','DemoController@userDemo')->name('user');
    
    Route::group(['middleware'=>['admin']],function() {
        Route::get('/admin','DemoController@adminDemo')->name('admin');
    }); 
});
    
    
    
Route::get('students/search','studentController@search');
Route::get('students/update','studentController@afprinten');

Route::get('students/ingave','studentController@ingave');

Route::post('students/print','studentController@print');
Route::post('students/found','studentController@found');
Route::post('students/find_studentennummer','studentController@find_studentennummer');
Route::post('punten/klasselect','PuntenToevoegenController@giveStudents');
Route::get('punten/uploadPunten','PuntenToevoegenController@uploadPunten');

//Route::post('punten/uploadPunten','PuntenToevoegenController@uploadPunten');

Route::resource('docent','DocentController');


Route::get('index', 'StudentController@index');


Route::post('students/found','studentController@found');


Route::post('students/find_naam_voornaam','studentController@find_naam_voornaam');
Route::resource('students','studentController');
Route::resource('punten','PuntenToevoegenController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
