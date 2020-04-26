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

Route::get('/', function () {return redirect()->route('dashboard');});
Route::get('login', 'AuthenticationController@login')->name('login');
Route::any('logout', 'AuthenticationController@logout')->name('logout');
Route::post('login', 'AuthenticationController@authentication')->name('authentication');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

});

