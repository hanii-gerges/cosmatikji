
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- keywords -->
    <meta name="keywords" content="shop, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link href="{{asset('shop/img/favicon.ico')}}" rel="icon">
    <!-- Bundle -->
    <link href="{{asset('vendor/css/bundle.min.css')}}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{asset('shop/css/line-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/revolution-settings.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/cubeportfolio.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/nouislider.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/range-slider.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/blog.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/cart.css')}}" rel="stylesheet">

    {{-- toastr css link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->

<header id="header">
    <div class="upper-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mt-auto mb-auto">

                </div>
                <div class="col-12 col-lg-6 mt-auto mb-auto d-lg-flex justify-content-center justify-content-lg-end">
                    <ul class="shop-details d-flex">
                       
                        <li><a href="#" id="open-shop-card"><i class="las la-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="../index-food-shop.html"><img src="{{ asset('shop/img/logo.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <div class="row no-gutters w-100">
                <div class="col-6 col-lg-3 offset-3 offset-lg-0">
                    <a href="../index-food-shop.html" title="Logo" class="logo fixed-nav-items">
                        <!--Logo Default-->
                        <img src="{{ asset('shop/img/logo-black.png') }}" alt="logo" class="logo-dark">
                    </a>
                </div>
                <!--Nav Links-->
                <div class="col-6 d-none d-lg-flex justify-content-lg-center align-items-lg-center">
                    <div class="collapse navbar-collapse" id="megaone">
                        <ul class="navbar-nav ml-auto mr-auto">
                            @foreach($categories as $category)
                            <li class="nav-item dropdown">
                                <a href="/categories/{{ $category->id }}">
                                <div class="dropbtn">{{ $category->name }}</div>
                                </a>
                                <div class="dropdown-content text-right">
                                    @foreach($category->subcategories as $subcategory)
                                        <a href="/categories/{{ $category->id }}/subcategories/{{ $subcategory->id }}">{{ $subcategory->name }}</a>
                                    @endforeach
                                </div>
                            </li>
<<<<<<< HEAD
                            <li><a class="nav-link active" href="{{route('front.home')}}">الرئيسية</a></li>
=======
                            @endforeach
                            <a class="nav-link active" href="/">الرئيسية</a></li>
>>>>>>> e4ba1b14ca594aa015c1767c78d2ace21d49a2c7
                        </ul>
                    </div>
                </div>
                <!--Side Menu Button-->
                <div class="col-3 d-flex justify-content-end align-items-center">

                    <ul class="shop-details fixed-nav-items">
                        <li><a href="#" id="open-shop-card1"><i class="las la-shopping-bag"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="{{route('front.home')}}">رئيسية</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="product-listing.html">تسوّق</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">اتصل بنا</a>
=======
                        <a class="nav-link" href="/">الرئيسية</a>
>>>>>>> e4ba1b14ca594aa015c1767c78d2ace21d49a2c7
                    </li>
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                </ul>
                <p class="text-dark">&copy; 2020 MegaOne. Made With Love by Themesindustry</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
    {{--  <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>  --}}
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
</header>
<!--Header End-->

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

    @yield('content')











<!--Footer Start-->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-12">
                <div class="footer-social text-center">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="lab la-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="lab la-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="lab la-google"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="lab la-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="lab la-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="las la-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-12 text-center">
                <p class="company-about fadeIn">© 2020 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<!--Shop card window Start-->
<section class="shop-card-window hidden" id="shop-card-window">
    <a href="#" id="close-card-window" class="close-card-window"><i class="las la-times"></i></a>
    <div class="shop-card-window-content">
        <h4 class="shop-card-heading">سلتي</h4>
        <div class="d-flex justify-content-center align-items-center">
            <div class="mini-bag">
                @foreach ($cart->items as $item)
                    
                <div class="bag-item">
                    <div class="item-img">
                        <img src="img/item1.jpg">
                    </div>
                    <div class="item-details">
                        <h4 class="item-name">اسم المنتج: {{ $item->product->name }}</h4>
                        <span class="item-qty">الكمية: {{ $item->count }}</span>
                        <span class="item-price">السعر: {{ $item->product->price }}</span>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="bag-btn">
            <a href="/carts/{{ $cart->id }}" class="btn web-dark-btn rounded-pill">عرض السلة</a>
        </div>
    </div>
</section>
<!--Shop card window  End-->
<!--Search modal window start-->
<div class="search_block">
    <div class="search_box animated wow fadeInUp d-flex justify-content-center align-items-center">
        <div class="inner">
            <input type="text" name="search" id="search" class="search_input" autocomplete="off" placeholder="Enter Your Keywords.." />
            <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i> </button>
        </div>
    </div>
    <div class="search-overlay"></div>
</div>
<!--Search modal window end-->

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
<script src="{{asset('vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{asset('vendor/js/jquery.appear.js')}}"></script>
<script src="{{asset('vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/js/parallaxie.min.js')}}"></script>
<script src="{{asset('vendor/js/wow.min.js')}}"></script>
<script src="{{asset('vendor/js/stickyfill.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendor/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{asset('vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="{{ asset('shop/js/map.js') }}"></script>
<!--Tilt Js-->
<!-- custom script-->
<script src="{{asset('vendor/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{asset('vendor/js/swiper.min.js') }}"></script>
<script src="{{asset('shop/js/nouislider.min.js')}}"></script>
<script src="{{asset('shop/js/script.js')}}"></script>
<script src="{{asset('shop/js/cart.js')}}"></script>
<script>
    $(document).ready(function() {
        recalculateCart();
        updateQuantity('.pass-quantity input');

        /* Set rates */
        var taxRate = 0.00;
        var fadeTime = 300;

        $('.rounded-pill').click(function() {
            addToCart(this);
        });

        $('.remove-item button').click(function() {
            removeItem(this);
        });

        /* Assign actions */
        $('.pass-quantity input').change(function() {
            updateQuantity(this);
            addToCart(this);
        });

        $('#shipping').change(function() {
            recalculateCart();
        });

        $('.btn-pay').click(function() {
            var shipping = $('#shipping').children('option:selected').val();
            if(shipping == '0')
            {
                alert('الرجاء اختيار منطقة الشحن');
                return false;
            }
            addTotalToCart(this);

        });

        function addTotalToCart(total) {
            var total = $(total).children().text();
            var url = '/carts/addTotalToCart'
            $.ajax({
                type: "PUT",
                url: url,
                data: { cartId: "{{ session()->get('cart') }}",
                        total: total,
                        "_token": "{{ csrf_token() }}",
                        },
                success: function (data) {
                    console.log(data);
            
                },
                error: function (data) {
                    console.log('Error:', data);
                }
                });
        
        }

        /* Recalculate cart */
        function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $('.item').each(function() {
            subtotal += parseFloat($(this).children('.product-line-price').text());
            });

            /* Calculate totals */
            var shipping = Number($('#shipping').children('option:selected').val());
            //console.log('shipping '+ shipping);
            //console.log('subtotal ' + subtotal);
            var total = Number(subtotal + shipping);
            //console.log('total ' + total);

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal.toFixed(2));
            $('.cart-total').html(total.toFixed(2));
            if (total == 0) {
                $('.checkout').fadeOut(fadeTime);
            } else {
                $('.checkout').fadeIn(fadeTime);
            }
            $('.totals-value').fadeIn(fadeTime);
            });
        }

        /* Update quantity */
        function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function() {
                $(this).fadeOut(fadeTime, function() {
                    $(this).text(linePrice.toFixed(2));
                    recalculateCart();
                    $(this).fadeIn(fadeTime);
                });
            });

        }

        function addToCart(addButton) {
            var productId = $(addButton).parent().parent().children().children('input').attr('id');
            var productCount = $(addButton).parent().parent().children().children('input').val();
            var url = "/cartitems/addToCart";
            console.log(productId);
            console.log(productCount);

            //if (confirm('Are you sure you want to Delete Ad ?')) {
            $.ajax({
            type: "POST",
            url: url,
            data: { productId: productId,
                    productCount: productCount ,
                    "_token": "{{ csrf_token() }}",
                    },
            success: function (data) {
                console.log(data);

            },
            error: function (data) {
                console.log('Error:', data);
            }
            });

        //}
        //else return false;

        }

        /* Remove item from cart */
        function removeItem(removeButton) {
            var productId = $(removeButton).attr('id');
            var itemId = $(removeButton).parent().parent().attr('id');
            //console.log(itemId);
            var url = "/cartitems/removeFromCart";

            $.ajax({
                type: "DELETE",
                url: url,
                data: { productId: productId,
                        itemId: itemId,
                        "_token": "{{ csrf_token() }}",
                        },
                success: function (data) {
                    console.log(data);

                },
                error: function (data) {
                    console.log('Error:', data);
                }
                });


            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
            });
        }


    });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
@if(Session::has('message'))

var type = "{{Session::get('alert-type','info')}}"

switch(type)
{
    case 'info' :
    toastr.info("{{Session::get('message')}}");
    break;

    case 'success' :
    toastr.success("{{Session::get('message')}}");
    break;

    case 'warning' :
    toastr.warning("{{Session::get('message')}}");
    break;

    case 'error' :
    toastr.error("{{Session::get('message')}}");
    break;
}
@endif

</script>

</body>
</html>
