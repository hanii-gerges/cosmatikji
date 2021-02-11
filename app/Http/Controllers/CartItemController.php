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
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!session()->has('cart'))
        {
            $cart = Cart::create();
        }
        $item = session()->has('item') ? session()->get('item') : [];
        $item[$product->id] = [
            'count' => request('productCount'),
        ];
        config(['lifetime' => 43200,'expire_on_close' => false]);
        session(['cart' => $cart->id, 'item' => $item]);
        session()->flash('message', 'تمت الاضافة');
        
        CartItem::where('cart_id',$cart->id)->where('product_id',$product->id)->delete();
        CartItem::create([
            'product_id' => $product->id,
            'cart_id' => session()->get('cart'),
            'count' => request('productCount'),
        ]);
        
        $data = [];
        $data['cart'] = session()->has('cart') ? session()->get('cart') : [];
        $data['item'] = session()->has('item') ? session()->get('item') : [];
        return response()->json($data);
    }

    public function removeFromCart()
    {
        $item = session()->has('item') ? session()->get('item') : [];
        
        $cartItem = CartItem::findOrFail(request('itemId'));
        unset($item[$cartItem->product->id]);

        config(['lifetime' => 43200,'expire_on_close' => false]);
        session(['item' => $item]);

        $cartItem->delete();

        $data = [];
        $data['cart'] = session()->has('cart') ? session()->get('cart') : [];
        $data['item'] = session()->has('item') ? session()->get('item') : [];
        return response()->json($data);
    }
}
