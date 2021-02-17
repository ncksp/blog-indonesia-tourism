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

Route::get('/', 'ArticleController@index')->name('welcome');
Route::get('home', 'HomeController@index')->name('home');
Route::get('categories/{id}', 'ArticleController@byCategory')->name('articles.category');
Route::get('about-us', 'HomeController@aboutUs')->name('about.us');

Route::resource('articles', 'ArticleController');

Route::get('profile', 'UserController@profile')->name('profile');
Route::put('profile', 'UserController@updateProfile')->name('update.profile');
Route::get('users', 'UserController@getUserOnly')->name('users');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');


Route::view('blogs', 'user.blogs')->name('blogs');

