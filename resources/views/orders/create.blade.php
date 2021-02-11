@extends('layouts.app')

@section('content')
<!-- Contact Us Start -->
<section class="contact-sec" id="contact-sec">

    <div class="container">
        <div class="row">
            <div class="contact-box text-center text-md-right wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="small-heading">البيانات الشخصية</h4>
                    <!--                        <p class="small-text">Lorem ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                    <form class="contact-form" id="contact-form-data" method='post' action='/orders'>
                        @csrf
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
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
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="candidate_fname" name="firstName" placeholder="الاسم الاول" required="required" value="{{old('firstName')}}">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="candidate_lname" name="lastName" placeholder="الاسم الاخير" required="required" value="{{old('lastName')}}">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="رقم الهاتف" required="required" value="{{old('phone')}}">
                            </div>
                            
                            <div class="col-12 form-group">
                                <select class="form-control" id="sel1" name="state" required="required">
                                  <option>عمان</option>
                                  <option>الزرقاء</option>
                                  <option>اربد</option>
                                  <option>المفرق</option>
                                  <option>العقبة</option>
                                  <option>معان</option>
                                  <option>السلط</option>
                                  <option>جرش</option>
                                  <option>الطفيلة</option>
                                  <option>عجلون</option>
                                  <option>الكرك</option>
                                  <option>مادبا</option>

                                </select>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" id="user_message" name="address" placeholder="العنوان" rows="5" required="required">{{old('firstName')}}</textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn web-btn user-contact rounded-pill contact_btn" type="submit">تأكيد الطلب
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->

@endsection