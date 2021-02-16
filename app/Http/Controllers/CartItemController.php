<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function addToCart()
    {
        $product = Product::findOrFail(request('productId'));
        $cart = Cart::where('id',request()->session()->get('cart'))->first();
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
        }
        $item = request()->session()->has('item') ? request()->session()->get('item') : [];
        $item[$product->id] = [
            'count' => request('productCount'),
        ];
        config(['lifetime' => 43200,'expire_on_close' => true]);
        session(['cart' => $cart->id, 'item' => $item]);
        
        $cartitem = CartItem::where('cart_id',$cart->id)->where('product_id',$product->id)->first();
        if(!$cartitem)
        {
            CartItem::create([
                'product_id' => $product->id,
                'cart_id' => request()->session()->get('cart'),
                'count' => request('productCount'),
                ]);
            }
            else
            {
            $cartitem->update([
                'count' => request('productCount'),
                ]);
        }
        
        session(['message' , 'تمت الاضافة']);
        $data = [];
        $data['cart'] = request()->session()->has('cart') ? request()->session()->get('cart') : [];
        $data['item'] = request()->session()->has('item') ? request()->session()->get('item') : [];
        return response()->json($data);
    }

    public function removeFromCart()
    {
        
        $cartItem = CartItem::findOrFail(request('itemId'));
        $item = request()->session()->has('item') ? request()->session()->get('item') : [];
        unset($item[$cartItem->product->id]);

        config(['lifetime' => 43200,'expire_on_close' => true]);
        session(['item' => $item]);

        $cartItem->delete();

        $data = [];
        $data['cart'] = request()->session()->has('cart') ? request()->session()->get('cart') : [];
        $data['item'] = request()->session()->has('item') ? request()->session()->get('item') : [];
        return response()->json($data);
    }
}
