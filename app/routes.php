<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::get('/','PagesController@index');
Route::get('/sell','PagesController@sell');
Route::post('/sendmail','MailController@create');
Route::post('/getcar/{id}','CarController@show');
Route::post('/create/car','CarController@create');

Route::group(array('before' => 'auth'), function() {
    Route::get('/admin', ['as' => 'admin', 'uses' => 'UsersController@admin']);
});
