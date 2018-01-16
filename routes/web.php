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
});



Route::post('collections/url','CollectionController@url');
Route::get('collections/url',function(){
    return view('collections.url');
});


Route::resource('collections','CollectionController');


Route::resource('collections/video','assistidosController',['names'=>[
    'show'=>'video'
]],['only'=>[
    'show','store','destroy'
]]);


Route::get('xmls/editar','xmlController@editar');
Route::post('xmls/editar','xmlController@update');

Route::resource('xmls','xmlController',['except'=>[
    'index'
]]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
