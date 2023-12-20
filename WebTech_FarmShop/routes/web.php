<?php

use App\Http\Controllers\BuyController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', [AdminController::class,'getOrder'])->name("admin");


Route::get('/userpage', function () {
    return view('userpage');
})->name("userpage");


Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/getRegisterPage', function (){
    return view('register');
})->name("getRegisterPage");

Route::post('RegisterController/register',[RegisterController::class,'register'] )->name('register');


Route::get('/basket', function () {
    return view('basket');
})->name("basket");


Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");

Route::get('/about', function () {
    return view('about');
})->name("about");
/*
Route::group(['middleware' => 'admin'], function (){
    return view('admin');
})->name("admin");
*/

/*Route::get('/admin', function (){
    return view('admin');
})->name("admin");*/

#todo fix routing to make it secure

#testing item thingy prob not right
Route::get('/Stock/{id}', 'ItemController@getItem')->name('get.item');
