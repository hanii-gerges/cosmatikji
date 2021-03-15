@extends('layouts.app')

@section('content')


<!--main page content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content padding-top">
        <div class="container py-5">
            <section class="best-products">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="justify-content-right" style="margin-bottom: 30px">
                                <h1 class="heading text-right">الاكثر مبيعا</h1>
                            </div>
                        </div>
                    </div>
                    <div class="best-products-carousel owl-carousel owl-themesss">
                        @foreach ($products as $product)
                            
                        <div class="item text-center">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('shop/img/lipstick.jpg')}}">
                                    <div class="overlay-img">
                                        <div class="item-btns" id="addToCartFromCategory">
                                            <a class="btn btn-view" id="{{ $product->id }}" title="اضف الى السلة"><i class="las la-shopping-cart"></i></a>
                                            <a href="/products/{{ $product->id }}" class="btn btn-view" title="عرض المنتج"><i class="las la-eye"></i></a>


                                        </div>

                                    </div>
                                </div>
                                <div class="product-detail">
                                    <h4 class="product-name">{{ $product->name }}</h4>
                                    <p class="item-price">JD{{ $product->price }}</p>

                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    
                </div>
            </section>
            <!--END LATEST ARRIVALS-->
            <div class="row no-gutters mt-5">
                <div class="col-12">
                    
                        <!--content-->
                        <div class="standalone-area">
                            @php
                                $flag=true;
                            @endphp
                            @foreach ($categories as $cat)

                            @if ($flag)
                            <div class="row standalone-row align-items-center no-gutters">
                                <div class="col-lg-6">
                                    <div class="blog-image wow hover-effect fadeInLeft">
                                        <img src="{{asset('shop/img/category.jpg')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 stand-img-des">
                                    <div class="d-inline-block">
                                        <h2 class="gradient-text1">{{ $cat->name }}</h2>

                                        <a href="/categories/{{$cat->id}}" class="btn btn-outline-info">تسوّق</a>
                                    </div>
                                </div>
                            </div>
                            @else
                             <!--content-->
                             <div class="row standalone-row align-items-center no-gutters">
                                <div class="col-lg-6 order-lg-2">
                                    <div class="blog-image wow hover-effect fadeInLeft">
                                        <img src="{{asset('shop/img/category.jpg')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 stand-img-des">
                                    <div class="d-inline-block">
                                        <h2 class="gradient-text1">{{ $cat->name }}</h2>
                                        <a href="/categories/{{$cat->id}}" class="btn btn-outline-info">تسوّق</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @php
                                $flag = !$flag;
                            @endphp
                            @endforeach


                        </div>
                    <!-- END HEADING SECTION -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->



@endsection
