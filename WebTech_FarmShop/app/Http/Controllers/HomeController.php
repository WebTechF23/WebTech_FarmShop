<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    //

    public  function getHomePage(){
        $id =1;
//        $data = Order::wherehas('users', function ($q) use ($id){
//            $q->where('user_id',$id);
//        })->get();
//        $data = DB::table('orders')->leftJoin('users','orders.user_id','=','users.id')->get();
        $order = Order::with('users')->where('user_id','=',$id)->with('product')->get();

        $products = Order_product::where('order_id','=',$order[0]->id)->get();
        return view('home',['data'=>[$order,$products]]);
    }
}
