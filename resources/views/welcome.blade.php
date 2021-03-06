@extends('layouts.app')

@section('content')

<!--Slider Start-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('{{ asset('shop/img/banner-new.jpg')}}');">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        {{--  <div class="slide-contain">
            <h4>Product Listing</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('front.home')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="product-listing.html">Product Listing</a></li>
                    </ol>
                </nav>
            </div>
        </div>  --}}
    </div>
</section>
<!--slider sec end-->

<!--main page content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content padding-top">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                    <p class="sub-heading text-center">كوزماتيكجي</p>
                                    <h1 class="heading">الاقسام الرئيسية</h1>
                                    <p class="para_text m-auto" style="font-size:20px;">: يوجد لدى كوزماتيكجي تشكيلة من المنتجات المنتنوعة والتي تقسم الى مجموعة من التصنيفات</p>
                                </div>
                            </div>
                        </div>
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
                                        <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
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
                                        <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
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
