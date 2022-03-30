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
    return view('welcome');
});




//-------------------etudiant Routes---------------
Route::resource('etudiant', 'App\Http\Controllers\EtudiantController');
Route::resource('module', 'App\Http\Controllers\ModuleController');
// Route::get('/etudiant', 'App\Http\Controllers\EtudiantController@index');
// Route::get('/etudiant/create', 'App\Http\Controllers\EtudiantController@create');
// Route::post('/etudiant', 'App\Http\Controllers\EtudiantController@store');
// Route::get('/etudiant/{etudian}', 'App\Http\Controllers\EtudiantController@show');
// Route::get('/etudiant/{etudian}/edit', 'App\Http\Controllers\EtudiantController@edit');
// Route::patch('/etudiant/{etudian}', 'App\Http\Controllers\EtudiantController@update');
// Route::delete('/etudiant/{etudian}', 'App\Http\Controllers\EtudiantController@destroy');
// 	//----------------Rest for etudiant Table-----------------------
// Route::get('/api/etudiant/limit/{limit?}', 'App\Http\Controllers\EtudiantController@restIndex');
// Route::get('/api/etudiant/{etudian}', 'App\Http\Controllers\EtudiantController@restShow');
// Route::post('/api/etudiant', 'App\Http\Controllers\EtudiantController@restStore');
// Route::patch('/api/etudiant/{etudian}', 'App\Http\Controllers\EtudiantController@restUpdate');
// Route::delete('/api/etudiant/{etudian}', 'App\Http\Controllers\EtudiantController@restDestroy');
//-------------------End etudiant Routes------------

