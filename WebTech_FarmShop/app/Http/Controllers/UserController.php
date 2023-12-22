<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
/*
 * //Using the Auth facade to check the user that is logged in instead
    public function userInformation(){
        $users = DB::table('users')->select('name','email','phoneNumber')->get();

        return view('userpage',['userData'=>$users]);
    }
*/

    public function userOrderHistory(){
        $id = 1;

        $orders = Order::with('users')->with('product')->get();
        //$products = Order_product::with('orders')->get();
        $order = Order::with('users')->where('user_id','=', $id)->with('product')->get();

        $products = Order_product::where('order_id','=',$order[0]->id)->get();
        error_log($products);
        error_log($order);
        return view('userpage', ['orderdata'=>$order,$products]);
    }

}

