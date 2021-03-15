@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة قسم فرعي جديد</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('admin.store.subCat')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right text-right">القسم الرئيسي</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category_id" placeholder="القسم الرئيسي">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right text-right">اسم القسم الفرعي</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subname" placeholder="اسم القسم الفرعي">
                    @error('subname')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="col-sm-2 control-label bring_right">اضف صورة</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control-file">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">إضافة القسم فرعي</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
