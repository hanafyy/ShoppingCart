<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {   
        
        return view('cart.cart');
    }


    public function addtocart($id)
    {
        $product = Product::FindOrFail($id);
        
        $cartitems = session()->get('cartitems',[]);
        
        if(isset($cartitems[$id])){
            $cartitems[$id]['quantity']++;
        }
        else{
            $cartitems[$id]=[
                "img_path" => $product->img_path,
                "name" => $product->name,
                "price" => $product->price,
                "shipping_cost" => $product->shipping_cost,
                "details" => $product->details,
                "quantity" => 1,
            ];
        }

        session()->put('cartitems', $cartitems);
        return redirect()->back()->with('success','product addes successfully');
    }

    public function delete(Request $request)
    {
        if($request->id){

            $cartitems = session()->get('cartitems');
            if(isset($cartitems[$request->id])){
                unset($cartitems[$request->id]);
                session()->put('cartitems', $cartitems);
            }

            return redirect()->back()->with('success', 'Product deleted successfully');
        }

    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cartitems = session()->get('cartitems');
            $cartitems[$request->id]["quantity"] = $request->quantity;
            session()->put('cartItems', $cartitems);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }
}
