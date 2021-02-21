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




Auth::routes();


Route::get('/', 'QuestionsController@decision')->name('decision');
Route::get('home_another', 'HomeandTripController@home_second')->name('home_secondpart');
Route::get('trip_part', 'HomeandTripController@trip_parts')->name('trip_part');
Route::post('trippost', 'HomeandTripController@tripposts')->name('trippost');
Route::get('bgquestion', 'QuestionsController@questions')->name('bgquestion');
Route::post('answeresubmit', 'QuestionsController@ans_submit')->name('answeresubmit');
Route::get('home', 'HomeController@index')->name('home');
Route::post('onlyhome', 'Myhomeconroller@onlyhomeactivity')->name('homeonly');



