<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

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
            'created_at' => Carbon::now()
        ]);

        $request->session()->forget('cart');
        $request->session()->forget('item');

        return redirect('/orders/create')->with('success','تم ارسال الطلب بنجاح');

    }

    function adminRecived()
    {
        $orders = Order::where('status',1)->latest()->paginate(5);
        return view('admin.orders.recived',compact('orders'));
    }


    function adminUnRecived()
    {
        $orders = Order::where('status',0)->latest()->paginate(5);
        return view('admin.orders.unrecived',compact('orders'));
    }

    function updateOrderStatus(Request $request)
    {
        // $status = $request->status;
        $id = $request->id;
        /*if($id)
        {
           $success = Order::find($id)->update([
                'status' => 1,
            ]);
            if(!empty($success))
            {
                $notification = array(
                    'message' => 'تم تعديل حالة الطلب بنجاح',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);

            }else {
                $notification = array(
                    'message' => 'لم يتم تعديل حالة الطلب بنجاح',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);

            }*/
            $order = Order::find($id);
            $order->status = 1;
            $order->save();
            $notification = array(
                'message' => 'تم تعديل حالة الطلب بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);


        //}





    }

}
