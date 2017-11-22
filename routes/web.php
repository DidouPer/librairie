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

Route::resource('book', 'BookController');

Route::get('/books', function () {
    return view('books');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/baskets', 'BasketsController@index')->name('baskets');
//Route::get('/basket/create/{id}', 'BasketController@create')->('createbasket');
Route::get('/book', 'BookController@index')->name('book');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book/create', 'BookController@create')->name('books_create');
Route::post('/book', 'BookController@store')->name('books.store');
