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


Route::group(['prefix' => 'survey', 'as' => 'survey.'], function() {
    Route::get('/', 'SurveyController@index')->name('index');
    Route::get('show', 'SurveyController@create')->name('create');  
    Route::post('store', 'SurveyController@store')->name('store');

    });
    Route::get('/', function () {
        return view('welcome');
    });