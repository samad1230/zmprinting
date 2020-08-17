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

// Route::get('/', function () {
//     return view('Home_page.welcome');
// });
Route::get('/', 'MainController@index');
Route::get('index', 'MainController@index');

Auth::routes();
//Auth::routes(['verify' => true, 'register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index');

Route::get('/aboutus', 'AdminController@aboutusdata')->name('aboutus');
Route::post('admin/store/about', 'AdminController@create_about')->name('store.about'); 
Route::get('editabout/{id}','AdminController@EditAbout'); 
Route::post('updateabout/{id}','AdminController@UpdateAbout'); 
Route::get('delete/about/{id}','AdminController@DeleteAbout');
