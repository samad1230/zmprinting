<?php

use Illuminate\Support\Facades\Route;



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
Route::post('updateabout','AdminController@UpdateAbout'); 
Route::get('delete/about/{id}','AdminController@DeleteAbout');

//slider section
Route::get('/slider', 'AdminController@slider_data')->name('sliderimage');
Route::post('admin/slider/about', 'AdminController@create_slider')->name('store.slider'); 
Route::get('editslider/{id}','AdminController@EditSlider'); 
Route::post('updateslider','AdminController@UpdateSlider'); 
Route::get('delete/slider/{id}','AdminController@Deleteslider');

//category section
Route::resource('category', 'CategoryController');
Route::get('category_delete/{category}','CategoryController@destroy')->name('category.delete');


//product section
Route::resource('product', 'ProductController');
Route::get('product_delete/{product}','ProductController@destroy')->name('product.delete');
Route::post('updateproduct','ProductController@update'); 


//client section
Route::resource('client', 'ClientController');
Route::get('client_delete/{client}','ClientController@destroy')->name('client.delete');
Route::post('updateclient','ClientController@update');

//Member section
Route::resource('member', 'MemberController');
Route::get('member/{member}','MemberController@destroy')->name('member.delete');
Route::post('updatemember','MemberController@update');


//Company Blog section
Route::resource('blog', 'BlogController');
Route::get('blog/{blog}','BlogController@destroy')->name('blog.delete');
Route::post('updateblog','BlogController@update');


//Company Profile section
Route::resource('profile', 'ProfileController');
Route::get('profile/{profile}','ProfileController@destroy')->name('profile.delete');
Route::post('updateprofile','ProfileController@update');


//Company Profile section
Route::resource('factory', 'FactoryController');

//Company Machine
Route::resource('machine', 'MachineController');
Route::resource('gallery', 'GalleryController');
Route::resource('social', 'SocialController');
