<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cart = Cart::where('id',session()->get('cart'))->first();
        $products = Product::all()->take(10);
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
            config(['lifetime' => 43200,'expire_on_close' => true]);
            session(['cart' => $cart->id,'item' => []]);
        }
        return view('welcome',compact('categories','cart','products'));
    }
}
