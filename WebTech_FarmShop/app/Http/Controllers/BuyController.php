<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function getBuyPage(){
        $products = Product::with('pictures')->get();
        $order = Order::with('product')->get();
        error_log($order);
        foreach ($order as $i){
            error_log("hello ". $order);
        }

//        error_log("h");
        return view('buy',['data'=>$products]);

    }
}
