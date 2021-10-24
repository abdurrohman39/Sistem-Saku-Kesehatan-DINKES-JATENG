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
    return view('auths.login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/kki', 'KkiController@index');
    Route::post('/kki/create', 'KkiController@create');
    Route::get('/kki/{id}/edit', 'KkiController@edit');
    Route::post('/kki/{id}/update', 'KkiController@update');
    Route::get('/kki/{id}/delete', 'KkiController@delete');
    Route::get('/kki/{id}/profile', 'KkiController@profile');

    Route::get('/umurhh', 'UmurhhController@index');
    Route::post('/umurhh/create', 'UmurhhController@create');
    Route::get('/umurhh/{id}/edit', 'UmurhhController@edit');
    Route::post('/umurhh/{id}/update', 'UmurhhController@update');
    Route::get('/umurhh/{id}/delete', 'UmurhhController@delete');
    Route::get('/umurhh/{id}/profile', 'UmurhhController@profile');
    Route::post('/umurhh/{id}/addangka', 'UmurhhController@addangka');
    Route::get('/umurhh/{id}/{idkota}/deletangka','UmurhhController@deletangka');

    Route::get('/tren', 'TrenController@index');
    Route::post('/tren/create', 'TrenController@create');
    Route::get('/tren/{id}/edit', 'TrenController@edit');
    Route::post('/tren/{id}/update', 'TrenController@update');
    Route::get('/tren/{id}/delete', 'TrenController@delete');
    Route::get('/tren/{id}/profile', 'TrenController@profile');
    Route::post('/tren/{id}/addjumlah', 'TrenController@addjumlah');
    Route::get('/tren/{id}/{idkasus}/deletejumlah', 'TrenController@deletejumlah');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,kki']], function () {
    Route::get('/dashboards', 'DashboardsController@index');
});
