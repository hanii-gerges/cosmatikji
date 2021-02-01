@extends('employee.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة صنف فرعي جديد</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('store.subCat')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">رقم الصنف الرئيسي</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cat_id" placeholder="رقم الصنف الرئيسي">
                    @error('cat_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم الصنف الفرعي</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subname" placeholder="اسم الصنف الفرعي">
                    @error('subname')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">إضافة الصنف فرعي</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
