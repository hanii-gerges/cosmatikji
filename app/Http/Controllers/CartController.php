<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Cart $cart)
    {
        $categories = Category::all();
        return view('carts.show')->with('cart',$cart)
                                 ->with('categories',$categories);
    }
    
    public function addTotalToCart(Request $request)
    {
        $cart = Cart::findOrFail($request->cartId);

        $cart->update([
            'total_amount' => $request->total,
        ]);

        
        return $cart->total_amount;
    }

}
