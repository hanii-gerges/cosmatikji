@extends('layouts.app')

@section('content')
{{--  source https://www.solodev.com/blog/web-design/how-to-use-number-type-inputs-to-dynamically-change-a-shopping-cart-total.stml  --}}
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-7">
          
          
          <div class="border border-gainsboro p-3">
              
              <h2 class="h6 text-uppercase mb-0">Cart Total (2 Items): <strong class="cart-total">98.60</strong></h2>
            </div>
            
            @foreach ($cart->items as $item)
                <div class="border border-gainsboro p-3 mt-3 clearfix item" id="{{ $item->id }}">
                  <div class="text-lg-left">
                      <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-5 col-5 text-lg-left">
                      <h3 class="h6 mb-0">{{ $item->product->name }}<br>
                      <small>السعر: د{{ $item->product->price }}</small>
                      </h3>
                  </div>
                  <div class="product-price d-none">{{ $item->product->price }}</div>
                  <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
                    <label for="pass-quantity" class="pass-quantity">الكمية</label>
                    <input class="form-control" type="number" value="{{ $item->count }}" id="{{ $item->product->id }}" min="1">
                  </div>
                  <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
                      <span class="product-line-price">{{ $item->product->price }}
                      </span>
                  </div>
                  <div class="remove-item pt-4">
                      <button class="remove-product btn-light" id="{{ $item->product->id }}">
                      حذف
                      </button>
                  </div>
                </div>
            @endforeach
        
      </div>
  
      <div class="col-xl-3 col-lg-4 col-md-5 totals">
        <div class="border border-gainsboro px-3">
          <div class="border-bottom border-gainsboro">
            <p class="text-uppercase mb-0 py-3"><strong>ملخص الطلب</strong></p>
          </div>
          <div class="totals-item d-flex align-items-center justify-content-between mt-3 border-bottom">
            <p class="text-uppercase"><strong>السعر قبل الشحن</strong></p>
            <p class="totals-value font-weight-bold" id="cart-subtotal">95</p>
          </div>
          <select class="form-select totals-item d-flex align-items-center justify-content-between mt-3 border-bottom" id='shipping' aria-label="Default select example">
            <option value="0" selected>الشحن الى:</option>
            <option value="3">عمان</option>
            <option value="5">الزرقاء</option>
          </select>
          {{-- <div class="totals-item d-flex align-items-center justify-content-between">
            <p class="text-uppercase">Estimated Tax</p>
            <p class="totals-value" id="cart-tax">3.60</p>
          </div> --}}
          <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-gainsboro">
            <p class="text-uppercase"><strong>اجمالي السعر</strong></p>
            <p class="totals-value font-weight-bold cart-total">98.60</p>
          </div>
        </div>
        <a href="/orders/create" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-0">اطلب الان <span class="totals-value cart-total">98.60</span></a>
      </div>
  
    </div>
  </div><!-- container -->
@endsection