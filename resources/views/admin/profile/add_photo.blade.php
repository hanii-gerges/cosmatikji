@extends('admin.layout')

@section('content')

<div class="page_content">

    <h1 class="heading_title">اضافة صورة</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success"> <strong>تم الحفظ بنجاح!</strong> <a href="add_new_topic.html" class="alert-link">إضغط هنا</a> لاضافة موضوع جديد. </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('admin.store.photo')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text">الصورة الشخصية</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" style="height: unset;" name="photo">
                    <input type="hidden" name="old_photo" value="{{$admin->profile_photo_path}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">اضافة صورة</button>
                </div>
            </div>
        </form>
    </div>
@endsection
