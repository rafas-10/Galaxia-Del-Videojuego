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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::get('/galeria', 'GaleriaController@getGaleria')->name('galeria');
Route::get('/faq', 'FaqController@getHome')->name('faq');
//Route::get('/faq', 'Admin\FaqController@getHome')->name('faq_list');//Get Listar
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/dashboard', 'dashboard')->name('dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

