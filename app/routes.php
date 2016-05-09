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
Route::get('/finance','PagesController@finance');
Route::post('/sendmail','MailController@create');
Route::post('/getcar/{id}','CarController@show');
Route::post('/create/car','CarController@create');

Route::group(array('before' => 'auth'), function() {
    Route::get('/admin', ['as' => 'admin', 'uses' => 'UsersController@admin']);
    Route::get('/edit','UsersController@edit');
    Route::get('/accept','UsersController@accept');
    Route::get('/add/new/FaqType','AskController@newGroup');
    Route::get('/remove/new/FaqType','AskController@delGroup');
    Route::get('/add/new/ask','AskController@create');
    Route::get('/add/ask/{id}','AskController@create');
    Route::get('/finance/list','FinanceController@index');
    Route::post('/get/auto/{id}','CarController@show');
    Route::post('/remove/auto/{id}','CarController@destroy');
    Route::post('/remove/FaqType/{id}','AskController@destroy');
    Route::post('/add/new/group','AskController@newGroupSave');
    Route::post('/car/active','CarController@active');
});
