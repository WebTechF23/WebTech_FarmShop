<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;
use function Laravel\Prompts\error;
use function Laravel\Prompts\select;


class UserController extends Controller
{
/*
 * //Using the Auth facade to check the user that is logged in instead
    public function userInformation(){
        $users = DB::table('users')->select('name','email','phoneNumber')->get();

        return view('userpage',['userData'=>$users]);
    }
*/

    public function userOrderHistory($id){
        $id2=1;
        $data= collect();
        $order = Order::with('users')->where('user_id','=', $id2)->get();
        $products = Product::all();
        $Order_product = Order_product::all();
        error_log($Order_product);
        foreach ($Order_product as $x ) {
            for ($i = 0; $i < count($products); $i++) {
                if ($x->product_id == $products[$i]->id) {
                    $asArray = ['name' => $products[$i]->name, 'product_id' => $x->product_id, 'price' => $products[$i]->unit_price, 'quantityBrought' => $x->quantity, 'order_id' => $x->order_id];
                    $data->push('product', $asArray);


                }

            }

        }



//        error_log($products);
//        error_log($order);
        return view('userpage', ['orderdata'=>$order,$data]);
    }

}

