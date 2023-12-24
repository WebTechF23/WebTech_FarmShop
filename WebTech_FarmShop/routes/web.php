<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\HomeController;
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
Route::middleware(['auth'])->group(function (){
    Route::get('/admin', [AdminController::class,'getAdminPage'])->name("admin");
    Route::delete('/admin/{id}', 'AdminController@destroy')->name('user.deleteUser');
    Route::post('AdminController/createProduct',[AdminController::class,'createProduct'])->name('createProduct');
    Route::post('/products/{id}', [AdminController::class, 'updateProduct'])->name('products.updateProduct');
    Route::delete('/delete-item/{name}', [AdminController::class, 'deleteProductByName']);
});

Route::get('/', function () {
    return view('home');
})->name("home");

////test of query
//Route::get('/',[HomeController::class,'getHomePage'] )->name("home");

Route::get('/buy', [BuyController::class,'getBuyPage'])->name("buy");



Route::post('/BasketController/finalizePurchase',[BasketController::class,'finalizePurchase'])->name('confirmBuy');



Route::get('/userpage', function () {
    return view('userpage');
})->name("userpage");


Route::get('/userpage/{id}', [UserController::class,'userOrderHistory'])->name("userpage");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/logOut',[LogOutController::class,'logout'] )->name("logOut");

Route::post('/loginAuth',[LoginController::class,'authenticate'] )->name("loginAuth");

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


