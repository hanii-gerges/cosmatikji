@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">تعديل صورة للمنتج</h1>

    <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{asset($image->image)}}">
            <div class="caption">
              <h3>صورة المنتج {{$image->product->name}}</h3>
              <p>
                  <form action="{{route('admin.update.img',$image->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <input type="file" class="form-control" name="new_img">
                          <input type="hidden" value="{{$image->image}}" name="old_img">
                      </div>
                      <input type="submit" class="btn btn-success" value="تعديل الصورة"></p>
                  </form>

            </div>
          </div>
        </div>
      </div>





@endsection
