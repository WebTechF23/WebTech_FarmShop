<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function getBuyPage(){
        $products = Product::with('pictures')->get();
        return view('buy',['data'=>$products]);

    }
}
