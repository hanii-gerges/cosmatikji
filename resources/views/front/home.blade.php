@extends('layouts.app')

@section('content')
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
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">كوزماتيكجي</p>
                                            <h2 class="gradient-text1">ادوات كهربائية</h2>
                                            <p class="para_text" style="font-size:20px;">يوجد لدينا كافة الادوات الكهربائية</p>
                                            <a href="#" class="btn btn-outline-info">الذهاب للتسوق</a>
                                        </div>
                                    </div>
                                </div>

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6 order-lg-2">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">كوزماتيكجي</p>
                                            <h2 class="gradient-text1">العناية بالبشرة</h2>
                                            <p class="para_text" style="font-size:20px;">يوجد لدينا كافة مستحضرات وكريمات العناية بالبشرة</p>
                                            <a href="#" class="btn btn-outline-info">الذهاب للتسوق</a>
                                        </div>
                                    </div>
                                </div>

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">كوزماتيكجي</p>
                                            <h2 class="gradient-text1">العناية بالجسم</h2>
                                            <p class="para_text" style="font-size:20px;">يوجد لدينا جميع مستلزمات العناية بالجسم</p>
                                            <a href="#" class="btn btn-outline-info">الذهاب للتسوق</a>
                                        </div>
                                    </div>
                                </div>
                                <!--content-->

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6 order-lg-2">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">كوزماتيكجي</p>
                                            <h2 class="gradient-text1">العناية بالوجة</h2>
                                            <p class="para_text" style="font-size:20px;">يوجد لدينا تشكيلة رائعة من كريمات الاساس للعناية بالوجة</p>
                                            <a href="#" class="btn btn-outline-info">الذهاب للتسوق</a>
                                        </div>
                                    </div>
                                </div>

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{asset('shop/img/newcategories.jpeg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">كوزماتيكجي</p>
                                            <h2 class="gradient-text1">ميك اب</h2>
                                            <p class="para_text" style="font-size:20px;">يوجد لدينا كافة انواع الميك اب</p>
                                            <a href="#" class="btn btn-outline-info">الذهاب للتسوق</a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    <!-- END HEADING SECTION -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->



@endsection
