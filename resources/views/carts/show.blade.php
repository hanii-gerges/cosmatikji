@extends('layouts.app')

@section('content')
{{--  source https://www.solodev.com/blog/web-design/how-to-use-number-type-inputs-to-dynamically-change-a-shopping-cart-total.stml  --}}
<div class="container mb-5" style="margin-top: 200px;">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-7">
          
            
          <div class="border border-gainsboro p-3  border-radius">
              
              <h2 class="h6 text-uppercase mb-0">المجموع:  <strong class="cart-total">98.60</strong></h2>
            </div>
            
            @foreach ($cart->items as $item)
                <div class="border border-gainsboro p-3 mt-3 clearfix item border-radius mb-3" id="{{ $item->id }}">
                  <div class="col-6 col-md-2 text-lg-left">
                    <img src="{{ asset('/shop/img/lipstick.jpg') }}" alt="" style="width: 50px; height: 50px;">
                  </div>
                  <div class="col-md-4 col-6 text-lg-left">
                      <h3 class="h6 mb-0">{{ $item->product->name }}<br>
                      <small>السعر: د{{ $item->product->price }}</small>
                      </h3>
                  </div>
                  <div class="product-price d-none">{{ $item->product->price }}</div>
                  <div class="pass-quantity col-md-2  col-6">
                    <label for="pass-quantity" class="pass-quantity">الكمية</label>
                    <input class="form-control" type="number" value="{{ $item->count }}" id="{{ $item->product->id }}" min="1">
                  </div>
                  <div class="col-6 col-md-2  product-line-price pt-4">
                      <span class="product-line-price">{{ $item->product->price * $item->count }}
                      </span>
                  </div>
                  <div class="col-6 col-md-2 remove-item pt-4">
                      <button style="background-color: white; border: 0px;"  id="{{ $item->product->id }}">
                        <img src="https://img.icons8.com/material/30/000000/delete-forever--v2.png"/>
                      </button>
                  </div>
                </div>
            @endforeach
        
      </div>
  
      <div class="col-xl-3 col-lg-4 col-md-5 totals product-filter-nav" style="height: 400px">
        <div class="border border-gainsboro px-3 border-radius mt-3">
          <div class="border-bottom border-gainsboro">
            <p class="text-uppercase mb-0 py-3"><strong>ملخص الطلب</strong></p>
          </div>
          <div class="totals-item d-flex align-items-center justify-content-between mt-3 border-bottom">
            <p class="totals-value font-weight-bold" id="cart-subtotal">95</p>
            <p class="text-uppercase mb-4"><strong class="h7" style="font-weight: bold">السعر قبل الشحن</strong></p>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-3">
            <select class="rounded-pill" id='shipping' aria-label="Default select example">
              <option value="0" selected></option>
              <option value="3">عمان</option>
              <option value="5">الزرقاء</option>
            </select>
            <label class="h7 font-weight-bold" for="shipping">الشحن الى</label>
          </div>
          {{-- <div class="totals-item d-flex align-items-center justify-content-between">
            <p class="text-uppercase">Estimated Tax</p>
            <p class="totals-value" id="cart-tax">3.60</p>
          </div> --}}
          <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-gainsboro">
            <p class="totals-value font-weight-bold cart-total h5">00.00</p>
            <p class="text-uppercase"><strong class="h5" style="font-weight: bold">اجمالي السعر</strong></p>
          </div>
        </div>
        <a href="/orders/create" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-pill"><span class="totals-value cart-total">00.00</span>اطلب الان</a>
      </div>
  
    </div>
  </div><!-- container -->
@endsection