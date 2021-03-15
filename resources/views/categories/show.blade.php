@extends('layouts.app')

@section('content')
<!--Product Line Up Start -->
<div class="product-listing">
    <div class="container-fluid px-5 mt-10">
        <div class="row no-gutters justify-content-center">
{{-- 
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
            <!-- END STICKY NAV --> --}}

            <!-- START PRODUCT COL 8 -->
            <div class="col-md-12 order-1 order-lg-2">
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
                                    <div class="col-12 col-md-6 col-lg-3 text-center">
                                        <div class="featured-item-card">
                                            <div class="item-img">
                                                <img src="{{ asset('shop/img/lipstick.jpg')}}">
                                                <div class="item-overlay">
                                                    <div class="item-btns" id="addToCartFromCategory">
                                                        <a class="btn btn-view" id="{{ $product->id }}" title="اضف الى السلة"><i class="las la-shopping-cart" id="{{ $product->id }}"></i></a>
                                                        <a href="/products/{{ $product->id }}" class="btn btn-view" title="عرض المنتج"><i class="las la-eye"></i></a>


                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h4 class="item-name">{{ $product->name }}</h4>
                                                {{--  <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>
                                                <img src="https://img.icons8.com/android/15/000000/star.png"/>  --}}
                                                <p class="item-price">JD{{ $product->price }}</p>
                                                <div class="row justify-content-between" id="addToCartFromCategory">
                                                    <button class="col-6 btn btn-view rounded-pill sub-links" style="padding: 0%; border: .8px solid #d6d4d4"><a href="#" id="{{ $product->id }}">اضف الى السلة</a></button>
                                                    <button class="col-5 btn btn-view rounded-pill sub-links" style="padding: 0%; border: .8px solid #d6d4d4"><a href="/products/{{ $product->id }}">عرض المنتج</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="mt-5 w-50 mx-auto paginator">
                                    {{ $products->links() }}
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

<h2 class="text-right mr-5 mb-5">تسوّق حسب الفئة</h2>

<div class="container w-75 mx-auto mb-5">
    <div class="row justify-content-end">
        @foreach ($category->subcategories as $subcategory)
            
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pl-md-5 mb-5 justify-content-center sub-links" >
                <div class="row justify-content-center" style="width: 250px;">
                    <div class="col-12">
                    <a href="/categories/{{ $category->id }}/subcategories/{{ $subcategory->id }}"><img style="border-radius: 100%; width:200px; height: 200px;" src="{{ asset('shop/img/subcategory.jpg')}}" alt=""></a>
                    </div>
                    <a href="/categories/{{ $category->id }}/subcategories/{{ $subcategory->id }}"><div class="col-12 text-center h5 mt-3" style="font-weight: bold">{{ $subcategory->name }}</div></a>
                </div>
        </div>
        @endforeach
        
    </div>
</div>

@endsection