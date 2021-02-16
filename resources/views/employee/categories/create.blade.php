@extends('employee.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">إضافة قسم جديد</h1>


    <!--Start status alert-->
    @if (session('success'))
    <div role="alert" class="alert alert-success">{{session('success')}} </div>
    @endif
    <!--/End status alert-->


    <div class="form">
        <form class="form-horizontal" action="{{route('store.cat')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم القسم</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="اسم القسم">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-primary">إضافة القسم</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
