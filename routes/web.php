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

Route::middleware('test')->get('/', function () {
    // $medium =  resolve('medium-php-sdk');
    //dd($medium);

    //dd(session()->get('test'));

    return view('welcome');
});


Route::get('/custom', function () {
    dd(config('blog.creator'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
