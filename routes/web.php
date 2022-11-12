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

Route::get('/', function () {
    return view('welcome');
})->name('home');
/*Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');*/
Route::get('/user/main', function(){
    return view('user/main');
});

Route::match(['get', 'post'], '/send', 'App\Http\Controllers\ContactController@send');

Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', 'App\Http\Controllers\UserController@create')->name('register');
    Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register.store');

    Route::get('/login', 'App\Http\Controllers\UserController@loginForm')->name('login');
    Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login.store');
});

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout')->middleware('auth');

Route::get('/user/main', function(){
    return view('user/main');
});
Route::group(['middleware'=>'admin', 'prefix'=>'admin', 'namespace'=>'Admin'],function(){

});
Route::get('admin', 'App\Http\Controllers\Admin\MainController@index')->middleware('admin');