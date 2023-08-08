<?php

use App\Http\Controllers\UserController;
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

Route::get('/', 'UserController@home')->name('home');

Route::get('/login', 'UserController@login')->name('login');

Route::get('/daftar', 'UserController@daftar')->name('daftar');

Route::POST('/postdaftar', 'UserController@postdaftar')->name('postdaftar');

Route::POST('/masuklogin', 'UserController@masuklogin')->name('masuklogin');

Route::middleware('auth')->group(function(){

    Route::get('/detailtransaksi{produk}', 'UserController@detailtransaksi')->name('detailtransaksi');

    Route::get('/logout', 'UserController@logout')->name('logout');

} );


