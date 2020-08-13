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

// Landing Route
//Route::get('/', function () { return view('home'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

// Auth Route
Auth::routes();

// Event Routes
Route::get('/event/create', 'EventsController@create');
Route::post('/event/store', 'EventsController@store');
Route::get('/event/show', 'EventsController@show');

// Participant Routes
Route::get('/participant/create/{eventId}', 'ParticipantController@create');
Route::post('/participant/store', 'ParticipantController@store');
Route::get('/participant/show/{eventId}', 'ParticipantController@show');
Route::get('/participant/showStanding/{eventId}', 'ParticipantController@saveStanding');
Route::post('/participant/storeStanding/{eventId}/{participantId}/{round}', 'ParticipantController@storeStanding');

// Blah test
Route::get('/test', 'EventsController@chart');
