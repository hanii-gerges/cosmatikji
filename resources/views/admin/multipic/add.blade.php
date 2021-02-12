@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة صور للمنتج </h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('admin.store.multipic')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">رقم المنتج</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="product_id" placeholder="رقم المنتج ">
                    @error('product_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اختر صور المنتج</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image[]" multiple="">
                    @error('image')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">إضافة الصور للمنتج</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
