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
/*
Route::get('/', function () {
    return view('home');
});
*/
//layouts
Route::get('index','LayoutController@index');
Route::get('why','LayoutController@why');
Route::get('support','LayoutController@support');
Route::get('privacy','LayoutController@privacy');
Route::get('news','LayoutController@news');
Route::get('donation','LayoutController@donation');
Route::get('about-us','LayoutController@aboutus');
Route::get('counter','LayoutController@counter');

//Login Form
Route::get('login','LoginController@login');
Route::post('save-donor','LoginController@addDonor');

//Contact-us
Route::get('contact-us','ContactUsController@contactUs');
Route::post('add-msg','ContactUsController@addSuggestion');

//Home page
Route::get('/','HomeController@home');
Route::get('search','HomeController@search');
//Route::get('search-page','HomeController@search');


//Admin

//admin
Route::get('/admin','Admin\AdminController@showAdmin');
Route::get('/dashboard','Admin\AdminController@dashboard');
Route::post('/admin-login','Admin\AdminController@login');
Route::get('/all-donors','Admin\AdminController@allDonors');
Route::get('/all-suggestion','Admin\AdminController@allSuggestion');
Route::get('/delete-suggestion/{id}','Admin\AdminController@deleteSuggestion');
Route::get('/delete-donor/{id}','Admin\AdminController@deleteDonor');


