<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'review' => 'required|string'
        ]);
        Review::create([
            'product_id' => $request->productID,
            'name' => $request->name,
            'email' => $request->email,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success','تم ارسال الطلب بنجاح');

    }
}
