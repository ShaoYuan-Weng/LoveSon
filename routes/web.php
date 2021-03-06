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
    return view('welcome', ['photo1' => 'Lovelace/lovelace-001.jpg']);
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/photo', 'LoveSonController@photo')->middleware('auth')->name('photo');
Route::get('/contact', 'ContactController@contact')->middleware('auth')->name('contact');
Route::post('/contact', 'ContactController@contactSent');
