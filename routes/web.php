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
Route::get('/base',function(){
	return view('base');
});


Route::resource('types','typeController');

Route::resource('promotions','promotionController');
Route::resource('specialites','specialiteController');

Route::resource('enseignent','enseignantController');
Route::resource('module','moduleController');
Route::resource('salle','salleController');

Route::resource('groupe','groupeController');
Route::resource('seance','seanceController');
Route::resource('emploit','emploitController');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

