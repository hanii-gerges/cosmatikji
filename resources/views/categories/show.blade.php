@extends('layouts.app')

@section('content')
<!--Product Line Up Start -->
<div class="product-listing">
    <div class="container">
        <div class="row no-gutters">

            <!-- START STICKY NAV -->
            <div class="col-12 col-lg-4 order-2 order-lg-1 sticky">
                <div id="product-filter-nav" class="product-filter-nav mb-3">
                    <div class="product-category">
                        <h5 class="filter-heading  text-center text-lg-right">التصنيفات الفرعية</h5>
                        <hr>
                        <ul>
                            @foreach($category->subcategories as $sub)
                            <li>
                                <span>({{ $sub->products->count() }})</span>
                                <a href="/categories/{{ $category->id }}/subcategories/{{ $sub->id }}">{{ $sub->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
            </div>
            <!-- END STICKY NAV -->

            <!-- START PRODUCT COL 8 -->
            <div class="col-md-12 col-lg-8 order-1 order-lg-2">
                <div class="row">

                    <!-- START LISTING HEADING -->
                    <div class="col-12 product-listing-heading">
                        <h2 class="text-right">{{ isset($subcategory) ? $subcategory->name : $category->name }}</h2>
                    </div>
                    <!-- END LISTING HEADING -->

                    <!-- START PRODUCT LISTING SECTION -->
                    <div class="col-12 product-listing-products">
                        <!--featured item sec start-->
                        <section class="featured-items padding-bottom" id="featured-items">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src="{{ asset('shop/img/item9.jpg')}}">
                                                <div class="item-overlay">
                                                    <div class="item-btns">
                                                        <a href="/products/{{ $product->id }}" class="btn btn-view">عرض المنتج<i class="las la-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">{{ $product->name }}</h4>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <p class="item-price">JD{{ $product->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                            <!--featured item sec end-->
                            {{ $products->links() }}
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