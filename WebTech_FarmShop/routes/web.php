<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
    return view('homeController');
});
*/

Route::get('/', function () {
    return view('home');
})->name("home");

////test of query
//Route::get('/',[HomeController::class,'getHomePage'] )->name("home");

Route::get('/buy', [BuyController::class,'getBuyPage'])->name("buy");

Route::get('/admin', [AdminController::class,'getAdminPage'])->name("admin");

Route::post('/BasketController/finalizePurchase',[BasketController::class,'finalizePurchase'])->name('confirmBuy');

/*Route::get('/userpage', function () {
    return view('userpage');
})->name("userpage");
*/

Route::get('/userpage', [UserController::class,'userOrderHistory'])->name("userpage");

Route::get('/loginPage', function () {
    return view('login');
})->name("loginPage");

Route::get('/logOut',[LogOutController::class,'logout'] )->name("logOut");

Route::post('/login',[LoginController::class,'authenticate'] )->name("login");

Route::get('/registerPage', function (){
    return view('register');
})->name("registerPage");

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

Route::put('/update-stock/{id}','BasketController@updateQuantity');
