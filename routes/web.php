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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('about', 'WelcomeController@about')->name('about');

//Route::get('issues', 'IssuesController@index')->name('issues.index');
//Route::get('issues/create', 'IssuesController@create')->name('issues.create');
//Route::post('issues', 'IssuesController@store')->name('issues.store');
//Route::get('issues/{issue}/edit', 'IssuesController@edit')->name('issues.edit');
//Route::put('issues/{issue}', 'IssuesController@update')->name('issues.update');
//
//
//Route::get('issues/{issue}', 'IssuesController@show')->name('issues.show');
//Route::delete('issues/{issue}', 'IssuesController@destroy')->name('issues.destroy');

Route::resource('issues', 'IssuesController');
Route::resource('comments', 'CommentsController', ['only' => 'store']);
Route::resource('photos', 'PhotosController', ['only' => 'store']);

Auth::routes();

//Route::namespace('Auth')->prefix('auth/qq')->group(function () {
//    Route::get('/', 'SocialitesController@qq');
//    Route::get('callback', 'SocialitesController@callback');
//});

//Route::namespace('Auth')->prefix('auth/github')->group(function () {
//    Route::get('/', 'SocialitesController@redirectToProvider');
//    Route::get('callback', 'SocialitesController@callback');
//});

//Route::get('/auth/github', 'Auth\SocialitesController@redirectToProvider');
//Route::get('/auth/github/callback', 'Auth\SocialitesController@callback');

Route::get('/auth/github', 'Auth\SocialitesController@redirectToProvider')->name('auth/github');
Route::get('/auth/github/callback', 'Auth\SocialitesController@callback')->name('auth/github/callback');

