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

Auth::routes();

Route::get('/app', 'HomeController@index')->name('dashboard');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['prefix' => 'app'], function () {
  
    Route::group(['prefix' => 'hives'], function () {
        Route::get('/', 'HivesController@index')->name('hives.index');
        Route::match(['get', 'post'], 'create', 'HivesController@create');
        Route::match(['get', 'put'], 'update/{id}', 'HivesController@update');
        Route::delete('delete/{id}', 'HivesController@delete');
    });
    
    Route::group(['prefix' => 'apiaries'], function () {
        Route::get('/', 'ApiariesController@index')->name('apiaries.index');
        Route::match(['get', 'post'], 'create', 'ApiariesController@create');
        Route::match(['get', 'put'], 'update/{id}', 'ApiariesController@update');
        Route::delete('delete/{id}', 'ApiariesController@delete');
    });
});





