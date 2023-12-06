<?php

use App\Http\Controllers\BuyController;
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


Route::get('/buy', [BuyController::class,'getBuyPage'])->name("buy");


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

Route::get('/about', function () {
    return view('about');
})->name("about");

