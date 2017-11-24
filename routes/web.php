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

Route::get('/books', function () {
    return view('books');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/basket', 'BasketsController@index')->name('baskets');
Route::get('/basket/create', 'BasketsController@create')->name('baskets_create');
Route::post('/basket/store', 'BasketsController@store')->name('basket_store');
//Route::get('/basket/create/{id}', 'BasketController@create')->('createbasket');
Route::get('/book/create', 'BookController@create')->name('book_create');
Route::get('/book', 'BookController@index')->name('book');
Route::post('/book', 'BookController@store')->name('book_store');
Route::get('/book/{id}', 'BookController@edit')->name('book_edit');
Route::put('/book/{id}', 'BookController@update')->name('book_update');

