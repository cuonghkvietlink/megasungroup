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

Route::get('/', 'PageController@home');

Route::get('/company','Pagecontroller@company');

Route::get('/brand','PageController@brand');

Route::get('/contact', 'PageController@contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
