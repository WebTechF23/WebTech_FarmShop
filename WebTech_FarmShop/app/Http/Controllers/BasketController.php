<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class BasketController extends Controller
{
    public function updateQuantity2(Request $request, $id)
    {

        //Validate ....
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

        $stock = Stock::findOrFail($id);

        $stock->update([
            'quantity' => $request->input('quantity'),
        ]);

    }


    public function finalizePurchase(Request $request)
    {
        // Data from request
        $data = $request->all();

        foreach ($data as $productName => $quantity) {

            $product = Product::where('name', $productName)->first();

            if ($product) {
                // Find or create stock for the product
                $stock = Stock::firstOrNew(['id' => $product->id]);

                // Check if
                if ($stock->quantity >= $quantity) {
                    $stock->quantity -= $quantity;
                    $stock->save();
                    // Update the stock quantity if quantity is high enough


                    // Creating of order

                    error_log(Auth::user()->name);

                    $order = Order::create([
                        'date' => now(),
//                        'user_id' => Auth::user()->id,
                    ]);





                    session()->flash('database_updated', 'Reservation completed successfully!');
                    // return redirect()->back();
                } else {

                    session()->flash('insufficient_stock', 'Sorry, insufficient stock');
                    return redirect()->back();
                }
            }
        }


        // Redirect homeController
        $url = route('basket');
        return redirect($url);


        //Testing
        error_log("Got this far..");


        /*
         *$data = $request->all();

        foreach ($data as $productName => $quantity) {

            $product = Product::where('name', $productName)->first();

            if ($product) {
                // Find or create stock for the product
                $stock = Stock::firstOrNew(['id' => $product->id]);

                // Check if
                if ($stock->quantity >= $quantity) {
                    $stock->quantity -= $quantity;
                    $stock->save();
                    // Update the stock quantity if quantity is high enough

                    session()->flash('database_updated', 'Reservation completed successfully!');
                    // return redirect()->back();
                } else {

                    session()->flash('insufficient_stock', 'Sorry, insufficient stock');
                    return redirect()->back();
                }
            }
        }
         */

        /*

        $User = new User();
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = Hash::make($request->input('password'));
        $User->phoneNumber = $request->input('phoneNumber');
        $User->save();

        */
    }


    public function hello()
    {
        return 'Hello World';
    }

    public function index()
    {
        return 'Hello World';
    }


}
