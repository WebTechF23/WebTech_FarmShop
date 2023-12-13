<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
public function retrieveUser(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $password = $request->input('phoneNumber');

}
}
