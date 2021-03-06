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

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/search', 'PostsController@search')->name('search');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')    
    ->name('admin');

Route::get('/admin', 'PostsController@adminSwitch');

Route::post('/admin', ['uses'=>'PostsController@adminHide']);