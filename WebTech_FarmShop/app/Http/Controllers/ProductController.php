<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function destroyByID($id) {

        $product = Product::find($id);

        if (!$product) {
            return ("ERROR, DOES NOT EXIST");
        }
            $user = auth()->user();

        if ($user->isAdmin()) {
            $product->delete();
            return redirect()->route('/buy')->with('success', 'product deleted sucessfully');



        } else {
            return redirect()->back()->with('error', 'You are not authorized to delete products');
        }

    }

    public function destroyByName($name)
    {
        $product = Product::where('name', $name)->first();

        if (!$product) {
            // Handle case where the product with the given name is not found
            return redirect()->back()->with('error', 'Product not found.');
        }

        $product->delete();

        // Redirect to a suitable page after deletion
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
