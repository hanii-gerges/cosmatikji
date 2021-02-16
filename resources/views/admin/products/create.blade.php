@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة منتج جديد</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('admin.store.product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">رقم القسم الفرعي</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subcat_id" placeholder="رقم القسم الفرعي">
                    @error('subcat_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم المنتج</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="اسم المنتج">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">سعر المنتج</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" placeholder="سعر المنتج">
                    @error('price')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">صورة المنتج</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="photo" placeholder="صورة المنتج">
                    @error('photo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> --}}
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف المنتج</label>
                <div class="col-sm-10">
                    {{-- <input type="text" class="form-control" name="name" placeholder="وصف المنتج"> --}}
                    <textarea name="description" class="form-control" cols="10" rows="10" placeholder="وصف المنتج"></textarea>
                    @error('description')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">إضافة المنتج</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
