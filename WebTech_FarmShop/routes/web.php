<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get('/buy', function () {
    return view('buy');
})->name("buy");


Route::get('/userpage', function () {
    return view('userpage');
})->name("userpage");


Route::get('/login', function () {
    return view('login');
})->name("login");


Route::get('/basket', function () {
    return view('basket');
})->name("basket");


Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");

Route::get('/admin', function () {
    return view('admin');
})->name("admin");

Route::delete('/deleteByName', 'ProductController@destroyByName')->name('DestroyByName');

