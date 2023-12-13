<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use http\Client\Request;

class UserController extends Controller
{

    public function displayOrderHistory($id){
        $users = User::with($id);
        $orders = Order::all('user_id', $id);

        return view('userpage', ['user' => $users, 'order' => $orders]);
    }

    public function storeUser(Request $request): RedirectResponse
    {
        //$name = $request

    $request->user()->fill([
        'password' => Hash::make($request-> newPassword)
    ])->save();

    return redirect('welcome');
    }



}

