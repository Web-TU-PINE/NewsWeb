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

Route::get('/aaa',function(){
  return View::make('panda.index');
});

Route::resource('/','NewsUserController');
Route::resource('/personal','PersonUserController');

Route::get('credit',function(){
  return View::make('pages.about');
});
Route::get('view',function(){
  return View::make('pages.gallery');
});
Route::get('contact',function(){
  return View::make('pages.contact');
});


Route::get('/product','ProductController@index');

Route::get('/news/show/{id}','NewsUserController@show');


//  Admin
Route::auth();
Route::resource('/news','NewsController');
Route::get('news/dowload/{id}','NewsController@dowload');
Route::resource('/typenews','TypeNewsController');
Route::get('/typenews/show/{id}','TypeNewsController@show');
Route::resource('/gallery','GalleryController');

Route::get('/home', 'HomeController@index');

//person   person/create
Route::resource('/person','PeopleController');
