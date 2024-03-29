<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('add', 'manage@AddArticle');
Route::post('add', 'manage@AddArticle');
Route::get('view', 'manage@view');
Route::get('/read/{id}', 'manage@read');
Route::post('/read/{id}', 'manage@read');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');