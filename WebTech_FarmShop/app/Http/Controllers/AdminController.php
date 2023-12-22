<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\error;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUser(){
        $users = DB::table('users')->select('id','name','email','phoneNumber')->get();
        //error_log($users);
        return view ('userData',['userData'=>$users]);
    }

    public function getAdminPage(){
        $orders = Order::with('product')->get();
        $users = DB::table('users')->select('id','name','email','phoneNumber')->get();
        $products = Product::with('pictures')->get();
        error_log($orders);
        error_log($users);
        error_log($products);
        return view('admin', ['data'=>[$orders,$users,$products]]);
    }

    public function updateStock($quantity, $value)
    {

    }

    public function createProduct(Request $request)
    {
        $url = route('admin'); //this is prob wrong, but im too tired to figure it out rn

        //create new stock
        $stock = new Stock();
        //save it
        $stock->save();
        //get new stock id
        $stockID = $stock->id;

        $picture = new Picture();
        $picture->save();

        $pictureID = $picture->id;

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->picture_id = $pictureID;
        $product->stock_id = $stockID; //this should hopefully just assign new stock id to product, same with picture id
        $product->save();

        return redirect($url);

    }





    public function indexUser()
    {
        $item = User::all();

    }

#todo uh make
    public function deleteUser($id){
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route();
    }


    public function createOrders(Request $request)
    {
        $url = route('admin');

        //create new order
        $order = new Order();
        $order->date = $request->input('date');
        $order->quantityBought = $request->input('quantityBought');
        $order->totalPrice = $request->input('totalPrice');
        $order->user_id = $request->input('user_id'); //for future change to drop down menu or something to search for names so admin doesnt have to cross reference IDs
        $order->created_at = $request->input('created_at'); //no clue if this is automatic or not, come back to it
        $order->updated_at = $request->input('updated_at');//same as created_at
        //save new order
        $order->save();

        return redirect($url);
        //need to check if $url is right, prob not
    }



}
