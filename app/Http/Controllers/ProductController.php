<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
            config(['lifetime' => 43200,'expire_on_close' => true]);
            session(['cart' => $cart->id,'item' => []]);
        }
        $categories = Category::all();
        return view('products.show')->with('product',$product)
                                    ->with('categories',$categories)
                                    ->with('cart',$cart);
                                    
    }
}
