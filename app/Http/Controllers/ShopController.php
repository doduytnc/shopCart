<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function addToCart(Request $request,$id){
        $product = Product::find($id);
        $cart = $request->session()->get('cart');
       /* $request->session()->flush('cart', $cart);*/
        $cart[$product->id] = [
                 "id" => $product->id,
                 "name" => $product->name,
                 "price" => $product->price,
                 "quantity" => 1
         ];

         $request->session()->put('cart', $cart);

        //$request->session()->flush('cart', $cart);

    return redirect()->route('index');

    }

    public function showCart() {
        return view('cart');
    }

    public function deleteProductOnCart(Request $request, $id) {
        $request->session()->get('cart');
        $request->session()->forget("cart.$id");

        return redirect()->route('showCart');

    }

}
