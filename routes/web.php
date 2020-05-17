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

Route::get('/', function () {return redirect()->route('dashboard');})->name('home');
Route::get('login', 'AuthenticationController@login')->name('login');
Route::any('logout', 'AuthenticationController@logout')->name('logout');
Route::post('login', 'AuthenticationController@authentication')->name('authentication');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard','DashboardController@home')->name('dashboard');
    Route::get('quizzes','QuizController@index')->name('quizzes.index');
    Route::get('category','CategoryController@categoryIndex')->name('categories.index');
    Route::get('users','UserController@userIndex')->name('users.index');
    Route::get('/users/profile','UserController@userProfile')->name('users.profile');
    Route::get('admins','AdminController@adminIndex')->name('admins.index');
});

