@extends('layouts.app')

@section('content')

<!-- Contact Us Start -->
<section class="contact-sec" id="contact-sec">

    <div class="container mt-10">
        <div class="row">
            <div class="col-12 col-lg-6 contact-box text-center text-md-right wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="small-heading text-right">اترك رسالتك</h4>
                    <!-- <p class="small-text">Lorem ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                    <form   action="{{route('store.msg')}}"   method="POST"   class="contact-form" id="contact-form-data">
                        @csrf
                        <div class="row my-form">
                            {{-- <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div> --}}
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control text-right" id="candidate_lname" name="lastName" placeholder="الاسم الاخير">
                                @error('lastName')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control text-right" id="candidate_fname" name="firstName" placeholder="الاسم الاول">
                                @error('firstName')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control text-right" id="user_email" name="userEmail" placeholder="بريدك الالكتروني">
                                @error('userEmail')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control text-right" id="user_subject" name="userSubject" placeholder="الموضوع">
                                @error('userSubject')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-12">
                                <textarea class="form-control text-right" id="user_message" name="userMessage" placeholder="الرسالة" rows="7"></textarea>
                                @error('userMessage')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-12 text-right">
                                <button class="btn web-btn user-contact rounded-pill contact_btn" type="submit">أرسال
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-description wow slideInLeft text-right" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail text-right">
                        <span class="fly-text">التواصل معنا</span>
                        <h4 class="large-heading">
                            <span class="heading-1">للبقاء</span>
                            <span class="heading-2">على تواصل</span>
                        </h4>
                    </div>
                    <p class="small-text text-right">
                        زبائننا الكرام يمكنكم التواصل معنا عبر
                    </p>
                    <div class="row location-details  text-md-left">
                        <div class="col-12 col-md-6 country-1"  style="margin-left:280px;">
                            <h4 class="heading-text text-right">المملكة الاردنية الهاشمية</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt" style="padding-right:5px;"></i><a href="#">07760933170</a></li>
                                    <li><i class="fas fa-envelope"></i><a href="#">email@website.com</a></li>
                                <li><i class="fas fa-map-marker" style="padding-right:2px;"></i><a href="#">ِعمان</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Us End -->


@endsection
