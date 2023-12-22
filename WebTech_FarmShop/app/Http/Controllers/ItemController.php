<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class ItemController extends Controller
{


    public function getItem($id)
    {
        $item = Product::with('stocks')->get();

        return response()->json($item);
    }

    public function updateStock(Request $request, Stock $item){
        $stockChange = $request->input('stock_change');

        $operation = $request->input('operation');

        if($operation === 'add'){
            $item->increment('stock', $stockChange);

        } elseif ($operation === 'subtract'){
            $item->decrement('stock', $stockChange);
        }

        }
}
