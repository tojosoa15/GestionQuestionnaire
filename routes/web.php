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
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
$real_path_admin = realpath(__DIR__).DIRECTORY_SEPARATOR.'admin_routes'.DIRECTORY_SEPARATOR;
/********** Admin Auth *************/
include_once($real_path_admin .'admin_auth.php');
Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/form:{id_form}', 'Front\FormController@index')->name('front.form.details');
Route::post('/page/get_nombre_page', 'Front\PageController@getNombrePage')->name('front.page.get_nombre_page');
Route::post('/page/load_page', 'Front\PageController@loadPage')->name('front.page.load_page');
Route::post('/page/save_response_next_load_page', 'Front\PageController@saveSessionLoadPage')->name('front.page.save_response_next_load_page');
