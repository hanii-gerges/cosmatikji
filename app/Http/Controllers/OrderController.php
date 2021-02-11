<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        if(!session()->has('cart') || !session()->has('item'))
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

        Order::create([
            'cart_id' => session()->get('cart'),
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
