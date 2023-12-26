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

    public function userOrderHistory($id)
    {
        $id2 = 1;
        $data = collect();
        $order = Order::with('users')->where('user_id', '=', $id)->get();
        $products = Product::all();
        $orderProducts = Order_product::all();

        if (Auth::check() && Auth::id() == $id) {

            $user = User::find($id, ['id', 'name', 'email', 'phoneNumber']);


            foreach ($order as $orderItem) {
                $totalPrice = 0;

                foreach ($orderProducts as $orderProduct) {
                    foreach ($products as $product) {
                        if ($orderProduct->product_id == $product->id) {
                            $sum = $product->unit_price * $orderProduct->quantity;
                            $totalPrice += $sum;
                            $asArray = [
                                'name' => $product->name,
                                'product_id' => $orderProduct->product_id,
                                'unitPrice' => $product->unit_price,
                                'quantityBought' => $orderProduct->quantity,
                                'order_id' => $orderProduct->order_id,
                                'price' => $sum,
                                'totalPrice' => $totalPrice
                            ];
                            $data->push($asArray);

                        }

                    }

                }

            }


            return view('userpage', ['orderdata' => $order, 'data' => $data, 'user' => $user]);
        }
    }


}

