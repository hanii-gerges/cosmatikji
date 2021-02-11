<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Cart $cart)
    {
        return view('carts.show')->with('cart',$cart);
    }
    

}
