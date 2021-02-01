@extends('admin.layout')

@section('content')

<div class="page_content">

    <h1 class="heading_title">تعديل حساب المدير</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}}</div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('admin.update.profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العضو</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="اسم المدير" value="{{$admin->name}}" name="name">
                </div>
            </div>
            <div class="form-group">
                <label for="input2" class="col-sm-2 control-label bring_right left_text">البريد الالكتروني</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control"placeholder="البريد الالكتروني" value="{{$admin->email}}" name="email">
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text">الصورة الشخصية</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" style="height: unset;" name="new_img">
                    <input type="hidden" class="form-control" name="old_img" value="{{$admin->profile_photo_path}}">
                    <small>{{$admin->profile_photo_path}}<small>
                </div> --}}
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">تعديل بيانات الحساب</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection
