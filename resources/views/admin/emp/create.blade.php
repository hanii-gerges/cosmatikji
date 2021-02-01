@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة عضو جديد</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success"> <strong>تم الحفظ بنجاح!</strong> <a href="add_new_topic.html" class="alert-link">إضغط هنا</a> {{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('store.emp')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العضو</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="اسم العضو">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input2" class="col-sm-2 control-label bring_right left_text">البريد الالكتروني</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني">
                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label bring_right left_text">كلمة المرور</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="كلمة المرور">
                    @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label bring_right left_text">نوع المستخدم</label>
                <div class="col-sm-10">
                <select  class="form-control" name="utype">
                    <option name="admin" value="admin">مدير</option>
                    <option name="employee" value="employee">موظف</option>

                </select>
            </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">إضافة العضو</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
