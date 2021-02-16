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
                                    <button class="btn web-btn rounded-pill">اضف الى السلة</button>
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

                                <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                                    <li class="col-4 nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Project Description</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional Information</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customer Reviews  (2)</a>
                                    </li>
                                </ul>
                                <div class="col-12 tab-content" id="myTabContent">
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
                                    </div>
                                    <div class="tab-pane fade reviews" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                        <div class="media">
                                            <div class="row no-gutter">
                                                <div class="col-12 col-lg-2 p-0">

                                                    <div class="row no-gutters">
                                                        <div class="col-12 d-flex  justify-content-center">
                                                            <img src="img/p1.jpg" alt="Generic placeholder image">
                                                        </div>
                                                        <div class="col-12 d-flex mt-2 justify-content-center">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-10 p-0">
                                                    <div class="media-body ">
                                                        <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                        <h5 class="mb-2 text-center text-lg-left">Media heading</h5>
                                                        <p class="text-center text-lg-left">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="row no-gutter">
                                                <div class="col-12 col-lg-2 p-0">

                                                    <div class="row no-gutters">
                                                        <div class="col-12 d-flex  justify-content-center">
                                                            <img src="img/p2.jpg" alt="Generic placeholder image">
                                                        </div>
                                                        <div class="col-12 d-flex mt-2 justify-content-center">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-10 p-0">
                                                    <div class="media-body ">
                                                        <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                        <h5 class="mb-2 text-center text-lg-left">Media heading</h5>
                                                        <p class="text-center text-lg-left">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row pl-2 pr-2">
                                            <div class="col-12 d-flex mb-4 mt-3">
                                                <h5 class="text-nowrap">Add Review</h5>
                                                <hr class="w-100 ml-5"/>
                                            </div>
                                            <div class="col-12">
                                                <form class="getin_form border-form" id="register">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="text" class="form-control"  placeholder="Name*" required="" id="registerName">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="email" class="form-control" placeholder="Email*" required="" id="registerEmail">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-2 text-center text-lg-left">
                                                            <h5 class="text-nowrap">Your Rating</h5>
                                                        </div>
                                                        <div class="col-12 col-lg-10 text-center text-lg-left">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <!--                                                                            <label for="comment">Your Rating:</label>-->
                                                                <textarea class="form-control textareaclass" rows="5" id="comment" placeholder="Your Review"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-3">
                                                            <div class="form-group d-flex justify-content-center d-lg-block">
                                                                <button class="text-center btn web-btn rounded-pill">Add Review</button>
                                                            </div>
                                                        </div>

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
    <!--START LATEST ARRIVALS-->
    <section class="best-products">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="heading-details">
                        <h4 class="heading">Best Selling Items</h4>
                    </div>
                </div>
            </div>
            <div class="best-products-carousel owl-carousel owl-themesss">
                <div class="item text-center">
                    <div class="product">
                        <div class="product-img">
                            <img src="img/item1.jpg">
                            <div class="overlay-img">
                                <div class="overlay-content">
                                    <a href="#"><i class="las la-heart"></i></a>
                                    <a href="#"><i class="las la-shopping-bag"></i></a>
                                    <a href="product-detail.html"><i class="las la-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <span class="product-cat">Category</span>
                            <h4 class="product-name">Product Name</h4>
                            <span class="fly-line"></span>
                            <ul class="reviews">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="product">
                        <div class="product-img">
                            <img src="img/item2.jpg">
                            <div class="overlay-img">
                                <div class="overlay-content">
                                    <a href="#"><i class="las la-heart"></i></a>
                                    <a href="#"><i class="las la-shopping-bag"></i></a>
                                    <a href="product-detail.html"><i class="las la-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <span class="product-cat">Category</span>
                            <h4 class="product-name">Product Name</h4>
                            <span class="fly-line"></span>
                            <ul class="reviews">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="product">
                        <div class="product-img">
                            <img src="img/item3.jpg">
                            <div class="overlay-img">
                                <div class="overlay-content">
                                    <a href="#"><i class="las la-heart"></i></a>
                                    <a href="#"><i class="las la-shopping-bag"></i></a>
                                    <a href="product-detail.html"><i class="las la-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <span class="product-cat">Category</span>
                            <h4 class="product-name">Product Name</h4>
                            <span class="fly-line"></span>
                            <ul class="reviews">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="product">
                        <div class="product-img">
                            <img src="img/item4.jpg">
                            <div class="overlay-img">
                                <div class="overlay-content">
                                    <a href="#"><i class="las la-heart"></i></a>
                                    <a href="#"><i class="las la-shopping-bag"></i></a>
                                    <a href="product-detail.html"><i class="las la-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <span class="product-cat">Category</span>
                            <h4 class="product-name">Product Name</h4>
                            <span class="fly-line"></span>
                            <ul class="reviews">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END LATEST ARRIVALS-->
</div>
<!-- END HEADING SECTION -->


@endsection