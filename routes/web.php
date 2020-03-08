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


Route::get('/burgers', 'BurgerController@index')->name('burgers.index')->middleware('auth');
Route::get('/burgers/create', 'BurgerController@create')->name('burgers.create');
Route::post('/burgers', 'BurgerController@store')->name('burgers.store');
Route::get('/burgers/{id}', 'BurgerController@show')->name('burgers.show')->middleware('auth');
Route::delete('/burgers/{id}', 'BurgerController@destroy')->name('burgers.destroy')->middleware('auth');

// passing an array disables those routes. 
// to see list of routes php artisan route:list
Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');
