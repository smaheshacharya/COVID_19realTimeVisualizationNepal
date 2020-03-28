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

Route::resource('data', 'DataController',
[
    'names' => [
        'index'   => 'data.index',
        'create'  => 'data.create',
        'store'   => 'data.store',
        'update'  => 'data.update',
        'show'    => 'data.show',
        'edit'    => 'data.edit',
        'destroy' => 'data.destroy',
    ],
]

);
Route::get('/','PagesController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
