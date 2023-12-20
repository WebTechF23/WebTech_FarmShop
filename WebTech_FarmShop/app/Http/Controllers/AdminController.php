<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\error;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUser(){
        $users = DB::table('users')->select('id','name','email','phoneNumber')->get();
        //error_log($users);
        return view ('userData',['userData'=>$users]);
    }

    public function getAdminPage(){
        $orders = Order::with('product')->get();
        $users = DB::table('users')->select('id','name','email','phoneNumber')->get();
        $products = Product::with('pictures')->get();
        error_log($orders);
        error_log($users);
        error_log($products);
        return view('admin', ['data'=>[$orders,$users,$products]]);
    }

    public function updateStock($quantity, $value)
    {

    }

    public function createProduct()
    {

    }

}
