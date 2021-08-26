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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users;
use App\Http\Controllers\Profile;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();



// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/', 'HomeController@index')->name('home');
});
// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

// profile
Route::get('/user', [Profile::class, 'index'])->name('user');
