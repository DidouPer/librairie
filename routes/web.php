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
Route::get('/testU', function () {
    return 'coucou';
});

Route::get('/', function () {
    return view('welcome')->with('message', 'Vous y êtes !');
});



Route::resource('book', 'BookController');


Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/book/create', 'BookController@create')->name('book_create');
Route::get('/book', 'BookController@index')->name('book');
Route::post('/book', 'BookController@store')->name('book_store');
Route::get('/book/{id}/edit', 'BookController@edit')->name('book_edit');
Route::put('/book/{id}', 'BookController@update')->name('book_update');
Route::get('/book/{id}/delete', 'BookController@destroy')->name('book_delete');
