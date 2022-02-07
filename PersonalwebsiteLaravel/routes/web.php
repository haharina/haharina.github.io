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

Route::get('/', function () {
    return view('homepage');
});
Route::resource('details', 'DetailController');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

