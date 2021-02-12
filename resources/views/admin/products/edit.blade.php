@extends('admin.layout')
@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل المنتج</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('admin.update.product',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">رقم الصنف الفرعي</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subcat_id" placeholder="رقم الصنف الفرعي" value="{{$product->subcategory_id }}">
                    @error('subcat_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم المنتج</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="اسم المنتج" value="{{$product->name}}">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">سعر المنتج</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" placeholder="سعر المنتج" value="{{$product->price}}">
                    @error('price')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">الصورة المنتج</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="photo" placeholder="الصورة المنتج">
                    <img src="{{asset($product->image)}}" alt="product image" style="width:50px;height:50px; float:center;">
                    <input type="hidden" name="old_photo" value="{{$product->image}}">
                </div>
            </div> --}}
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">وصف المنتج</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" cols="10" rows="10" placeholder="وصف المنتج">{{$product->description}}</textarea>
                    @error('description')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">تعديل بيانات المنتج</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
