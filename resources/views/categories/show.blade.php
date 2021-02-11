@extends('layouts.app')

@section('content')
<div class="product-listing">
    <div class="container">
        <div class="row">
            {{-- <div class="col-12 col-lg-4 order-2 order-lg-1 sticky">
            </div> --}}
            <!-- START PRODUCT COL 8 -->
            <div class="w-75 mx-auto">
                <div class="row">

                    <!-- START LISTING HEADING -->
                    <div class="col-12 product-listing-heading">
                        <h1 class="text-right">{{ $category->name }}</h1>
                    </div>
                    <!-- END LISTING HEADING -->

                    <!-- START PRODUCT LISTING SECTION -->
                    <div class="col-12 product-listing-products">
                        
                        <!--featured item sec start-->
                        <section class="featured-items padding-bottom" id="featured-items">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src="{{ asset('shop/img/item8.jpg')}}">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="/products/{{ $product->id }}" class="btn btn-view">عرض المنتج<i class="las la-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">{{ $product->name }}</h4>
                                                <ul class="reviews">
                                                    <li><img src="https://img.icons8.com/android/15/000000/star.png"/></li>
                                                    <li><img src="https://img.icons8.com/android/15/000000/star.png"/></li>
                                                    <li><img src="https://img.icons8.com/android/15/000000/star.png"/></li>
                                                    <li><img src="https://img.icons8.com/android/15/000000/star.png"/></li>
                                                    <li><img src="https://img.icons8.com/android/15/000000/star.png"/></li>
                                                </ul>
                                                <p class="item-price">د{{ $product->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                        
                            </div>
                        </section>
                    <!--featured item sec end-->
                    </div>
                    <!-- END PRODUCT LISTING SECTION -->
                </div>
            </div>
            <!-- END PRODUCT COL 8 -->
        </div>
    </div>
</div>
<!--Product Line Up End-->
@endsection