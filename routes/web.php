<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('decision', 'QuestionsController@decision')->name('decision');
Route::get('homeOrtrip', 'QuestionsController@homeOrtrip')->name('homeOrtrip');
Route::get('home_secondpart', 'HomeandTripController@home_second')->name('home_secondpart');
Route::get('trip_part', 'HomeandTripController@trip_parts')->name('trip_part');
Route::post('trippost', 'HomeandTripController@tripposts')->name('trippost');
Route::get('/', 'QuestionsController@questions')->name('bgquestion');

Route::get('home', 'HomeController@index')->name('home');
Route::post('onlyhome', 'Myhomeconroller@onlyhomeactivity')->name('homeonly');

Route::get('firsthome', 'SingleHome@firsthome')->name('firsthome');

Route::post('home_single', 'SingleHome@singlehome')->name('home_single');
Route::resource('questionans', 'QuestionAnsController');

Route::get('allactivity/{id}', 'AdminHomeController@showallData');
Route::get('showquestionns', 'AdminHomeController@showquestionans')->name('showqans');
Route::get('allqestionsandanswere/{id}', 'AdminHomeController@allqestionsandanswere')->name('allqestionsandanswere');




Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});
