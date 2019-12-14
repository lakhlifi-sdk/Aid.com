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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('question/create', 'QuestionController@create');
Route::post('create', 'QuestionController@store');
Route::get('index', 'QuestionController@index');
Route::get('usr', 'QuestionController@showusers');
Route::delete('delete/{id}','QuestionController@destroy');
Route::get('show','QuestionController@show')->name('show');
Route::post('reponce', 'ReponceController@store');


Route::get('question/{id}/singleArticle', 'QuestionController@singleArticle')->name('singlearticle');


Route::delete('delete_rep/{id}','ReponceController@destroy');
