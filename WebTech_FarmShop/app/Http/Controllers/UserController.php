<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;

class UserController extends Controller
{

    public function displayOrderHistory($id){
        $users = User::with($id);
        $orders = Order::all('user_id', $id);

        return view('userpage', ['user' => $users, 'order' => $orders]);
    }

}
