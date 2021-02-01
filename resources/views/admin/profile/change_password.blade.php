@extends('admin.layout')

@section('content')

<div class="page_content">

    <h1 class="heading_title">تعديل كلمة المرور</h1>


    <!--Start status alert-->
    @if (session('error'))
    <div role="alert" class="alert alert-danger">{{session('error')}}</div>
    @endif
    <!--/End status alert-->

    <div class="form">
        <form class="form-horizontal" action="{{route('admin.update.password')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">كلمة المرور الحالية</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="كلمة المرور الحالية" name="c_pass">
                    @error('c_pass')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input2" class="col-sm-2 control-label bring_right left_text">كلمة المرور الجديدة</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="كلمة المرور الجديد"name="n_pass">
                    @error('n_pass')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text">تأكيد كلمة المرورالجديدة</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" style="height: unset;" placeholder="تأكيد كلمة المرور" name="confirm">
                    @error('confirm')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">تعديل كلمة المرور</button>
                </div>
            </div>
        </form>
    </div>
@endsection
