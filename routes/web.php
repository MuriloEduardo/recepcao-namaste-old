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
    return redirect('/admin');
});

Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

    Route::resource('/relatorios', 'ReportController');
});

Route::group(['prefix' => 'api'], function () {

    Route::resource('/customers', 'CustomerController');

    Route::resource('/professionals', 'ProfessionalController');
});
