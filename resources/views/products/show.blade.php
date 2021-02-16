@extends('layouts.app')


@section('content')
<!-- START HEADING SECTION -->
<div class="about_content padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="product-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center text-lg-right">
                            <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="/">التصنيفات</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="/categories/{{ $product->subcategory->category->id }}">{{ $product->subcategory->category->name }}</a></li>
                            <li class="breadcrumb-item"><a href="/categories/{{ $product->subcategory->category->id }}/subcategories/{{ $product->subcategory->id }}">{{ $product->subcategory->name }}</a></li>
                        </ol>
                    </nav>
                    <div class="pro-detail-sec row">
                        <div class="col-12">
                            <h4 class="pro-heading text-center text-lg-right">{{ $product->name }}</h4>
                            <hr>
                            {{--  <p class="pro-text text-center text-lg-right">{{ $product->description }}</p>  --}}
                        </div>
                    </div>
                    <div class="row product-list product-detail" id={{ $product->id }}>

                        <div class="col-12 col-lg-6 product-detail-slider">
                            <div class="wrapper">
                                <div class="Gallery swiper-container img-magnifier-container" id="gallery">
                                    <div class="swiper-wrapper myimgs">
                                        <div class="swiper-slide"> <a href="{{ asset('shop/img/item1.jpg') }}" data-fancybox="1" title="Zoom In"><img class="myimage" src="{{ asset('shop/img/item1.jpg') }}" alt="gallery"/></a></div>
                                    </div>
                                </div>
                                <div class="Thumbs swiper-container" id="thumbs">
                                    <div class="swiper-wrapper">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 text-center text-lg-right">
                            <div class="product-single-price">
                                <h4><span class="real-price">JD{{ $product->price }}</span> </h4>
                                <p class="pro-description">{{ $product->description }}</p>
                            </div>

                            

                            <div class="row product-quantity input_plus_mins no-gutters">

                                <div class="qty col-12 col-lg-3 d-lg-flex  align-items-lg-center d-inline-block">
                                    <span class="minus"><i class="las la-minus"></i></span>
                                    <input type="number" class="count" id="{{ $product->id }}" name="qty" value="1">
                                    <span class="plus"><i class="las la-plus"></i></span>
                                </div>
                                <div class="col-12 col-lg-9">
                                    <button class="btn web-btn rounded-pill" id="addToCart">اضف الى السلة</button>
                                </div>
                            </div>


                            <div class="dropdown-divider"></div>

                            <div class="product-tags-list">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><span class="d-inline">التصنيفات:{{ $product->subcategory->category->name }}<span class="comma-separtor">,</span>{{ $product->subcategory->name }}</span></li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="share-product-details">
                                <ul class="share-product-icons">
                                    <li><p>Share Link:</p></li>
                                    <li><a href="#" class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#" class="linkedin-bg-hvr"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="row no-gutters product-all-details">

                                <ul class="col-12 nav nav-tabs text-lg-right justify-content-center" id="myTab" role="tablist">
                                    {{--  <li class="col-4 nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Project Description</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional Information</a>
                                    </li>  --}}
                                    <li class="col-4 nav-item">
                                        <div class="nav-link" id="contact-tab">التقييمات({{ $product->reviews->count() }})</a>
                                    </li>
                                </ul>
                                {{--  <div class="col-12 tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="product-tab-description text-center text-lg-left">If you are a small business and you are interested in small rebranding then this is a perfect plan for you, having Five years experience in Blogging, photographing, Disgning and love to cycling,Writting,Singing and Traveling around the world</p>
                                        <p class="product-tab-description text-center text-lg-left">If you are a small business and you are interested in small rebranding then this is a perfect plan for you, having Five years experience in Blogging, photographing, Disgning and love to cycling,Writting,Singing and Traveling around the world</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>  --}}
                                    <div class="reviews" id="contact" role="tabpanel">
                                        @foreach ($product->reviews as $review)
                                            
                                        <div class="row media mt-2 justify-content-end">
                                            
                                            <div class="col-12 col-lg-10">
                                                <div class="media-body ">
                                                    <span class="text-center text-lg-right d-block">{{ $review->created_at }}</span>
                                                    <h5 class="mb-2 text-center text-lg-right">{{ $review->name }}</h5>
                                                    <p class="text-center text-lg-right">{{ $review->review }}</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-2">
                                                
                                                <div class="justify-content-center">
                                                    <img src="{{ asset('shop/img/usericon.png') }}" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                                
                                        </div>
                                        <hr>
                                        @endforeach
                                        
                                        <div class="row pl-2 pr-2">
                                            <div class="col-12 d-flex mb-4 mt-3">
                                                <hr class="w-100 mr-5"/>
                                                <h5 class="text-nowrap">اضف تقييم</h5>
                                            </div>
                                            <div id="result">
                                                @if (count($errors)>0)
                                                    @foreach($errors->all() as $error)
                                                        <div class="alert alert-danger">
                                                            {{$error}}
                                                        </div>
                                                    @endforeach
                                                @endif
            
                                                @if (session('success'))
                                                    <div class="alert alert-success">
                                                        {{session('success')}}
                                                    </div>
                                                @endif
            
                                                @if (session('error'))
                                                    <div class="col-12 alert alert-danger">
                                                        {{session('error')}}
                                                    </div>
                                                @endif
            
                                            </div>
                                            <div class="col-12">
                                                <form class="getin_form border-form" id="register" action="/reviews" method="POST">
                                                    @csrf
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="text" class="form-control text-right"  name="name" placeholder="الاسم" required="" id="registerName">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="email" class="form-control text-right" name="email" placeholder="البريد الالكتروني" required id="registerEmail">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 text-right">
                                                            <h5 class="text-nowrap"></h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <!--                                                                            <label for="comment">Your Rating:</label>-->
                                                                <textarea class="form-control textareaclass text-right" rows="5" id="comment" name="review" placeholder="التقييم" required></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-3">
                                                            <div class="form-group d-flex justify-content-center d-lg-block">
                                                                <button class="text-center btn web-btn rounded-pill float-right">اضف تقييم</button>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="productID" value="{{ $product->id }}">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    
</div>
<!-- END HEADING SECTION -->


@endsection