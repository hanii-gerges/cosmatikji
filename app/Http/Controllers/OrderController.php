<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
            config(['lifetime' => 43200,'expire_on_close' => true]);
            session(['cart' => $cart->id,'item' => []]);
        }
        $categories = Category::all();
        return view('orders.create')->with('cart',$cart)
                                    ->with('categories',$categories);

    }

    public function store(Request $request)
    {
        if(!request()->session()->has('cart') || !request()->session()->has('item') || session('item') == [])
        {
            return redirect('/orders/create')->with('error','السلة الخاصة بك فارغة');
        }
        if(Cart::find(session('cart'))->total_amount === 0)
        {
            return redirect('/orders/create')->with('error','السلة الخاصة بك فارغة');
        }
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required|regex:/07[789]\d{7}\z/',
            'state' => 'required',
            'address' => 'required',
        ]);
        if(Cart::where('id',session()->get('cart'))->first()->total === 0)
        {
            return redirect('/orders/create')->with('error','السلة الخاصة بك فارغة');
        }
        Order::create([
            'cart_id' => request()->session()->get('cart'),
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
            'state' => $request->state,
            'address' => $request->address,
        ]);

        $request->session()->forget('cart');
        $request->session()->forget('item');

        return redirect('/orders/create')->with('success','تم ارسال الطلب بنجاح');

    }
}
