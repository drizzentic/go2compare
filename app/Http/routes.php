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

Route::get('/getquote1','QuoteController@quote1');

Route::post('/q1','QuoteController@question1');

Route::post('/q2','QuoteController@question2');

Route::post('/q3','QuoteController@question3');

Route::post('/getquote','QuoteController@getquote');

Route::get('/', function () {
    return view('welcome');
});
