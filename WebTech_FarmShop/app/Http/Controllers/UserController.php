<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function userInformation(Request $request){
        $request-> session()->get('name');
        $request-> session()->get('email');
        $request-> session()->get('phoneNumber');

    }


}

