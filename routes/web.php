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
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('documents', 'DocumentController');
});
Route::group(['middleware' => ['auth']], function () {
    Route::resource('organizations', 'OrganizationController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/logout', 'Auth\LoginController@logout');