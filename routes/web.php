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
Route::get('/', 'IndexController@index');
Route::get('/Abonnement', 'IndexController@abonnement');
Route::get('/Contact', 'IndexController@contact');
Route::get('/Points_de_ventes', 'localisationController@index');
Route::get('/Cahier_de_charge', 'IndexController@Cahier_de_charge');
Route::get('/tarif', 'IndexController@tarif');



