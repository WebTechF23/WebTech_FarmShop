<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class BasketController extends Controller
{
    //
    public function i(Request $request){
        $url = route('home');
        error_log("hello". $request->all());
        return redirect($url);
    }

    public function updateQuantity2(Request $request, $id) {

        //Validate ....
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

    $stock = Stock::findOrFail($id);

    $stock->update([
        'quantity' => $request->input('quantity'),
    ]);

    }


    public function finalizePurchase(Request $request){

         $data = $request->input('data');
         error_log("data: " . $data);

        $url = route('home');

        return redirect($url);

        /*

        $User = new User();
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = Hash::make($request->input('password'));
        $User->phoneNumber = $request->input('phoneNumber');
        $User->save();

        */
    }



    public function hello(){
        return 'Hello World';
    }

    public function index(){
        return 'Hello World';
    }


}
