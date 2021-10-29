<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get('/', 'HomeController@home');
Route::post('/', 'HomeController@home');

Route::get('/home/category', 'HomeController@category');
Route::post('/home/category', 'HomeController@category');


Route::get('/talent', 'HomeController@talent')->name('talent');
Route::post('/talent', 'HomeController@talent')->name('talent');

Route::get('/recruiter', 'HomeController@recruiter')->name('recruiter');
Route::post('/recruiter', 'HomeController@recruiter')->name('recruiter');

Route::get('/subscription', 'HomeController@subscription')->name('subscription');
Route::post('/subscription', 'HomeController@subscription')->name('subscription');

// admin
Route::post('/admin/login', 'AdminController@login');
Route::get('/admin/login', 'AdminController@login');

Route::get('/admin/home', 'AdminController@admin_home');
Route::post('/admin/home', 'AdminController@admin_home');

Route::post('/admin/talent', 'AdminController@talent');
Route::get('/admin/talent', 'AdminController@talent');

Route::post('/admin/recruiter', 'AdminController@recruiter');
Route::get('/admin/recruiter', 'AdminController@recruiter');

Route::post('/admin/subscribers', 'AdminController@subscriber');
Route::get('/admin/subscribers', 'AdminController@subscriber');


Route::get('/recruiter/{id}', 'AdminController@view_recruiter');
Route::get('/talent/{id}', 'AdminController@view_talent');
Route::get('/subscriber/{id}', 'AdminController@view_subscriber');


// Route::get('/email', 'HomeController@email');
