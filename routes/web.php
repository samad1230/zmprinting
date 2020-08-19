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

//about section
Route::get('/aboutus', 'AdminController@aboutusdata')->name('aboutus');
Route::post('admin/store/about', 'AdminController@create_about')->name('store.about'); 
Route::get('editabout/{id}','AdminController@EditAbout'); 
Route::post('updateabout/{id}','AdminController@UpdateAbout'); 
Route::get('delete/about/{id}','AdminController@DeleteAbout');

//slider section
Route::get('/slider', 'AdminController@slider_data')->name('sliderimage');
Route::post('admin/slider/about', 'AdminController@create_slider')->name('store.slider'); 
Route::get('editslider/{id}','AdminController@EditSlider'); 
Route::post('updateslider/{id}','AdminController@UpdateSlider'); 
Route::get('delete/slider/{id}','AdminController@Deleteslider');


//product section
Route::get('admin/product', 'AdminController@ProductAdd')->name('product');
Route::post('admin/producr/add', 'AdminController@create_product')->name('store.product'); 
// Route::get('editslider/{id}','AdminController@EditSlider'); 
// Route::post('updateslider/{id}','AdminController@UpdateSlider'); 
// Route::get('delete/slider/{id}','AdminController@Deleteslider');