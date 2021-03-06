@extends('employee.layout')

@section('content')
<div class="page_content">
    <div class="page_content">
        <div class="home_statics text-center">
            <h1 class="heading_title">احصائيات عامة للموقع</h1>

            <div style="background-color: #9b59b6">
                <span class="bring_right glyphicon glyphicon-user"></span>

                <h3>الأقسام الرئيسية</h3>

                <p class="h4">{{$categories}}</p>
            </div>

            <div style="background-color: #34495e">
                <span class="bring_right glyphicon glyphicon glyphicon-gift"></span>

                <h3>الأقسام الفرعية</h3>

                <p class="h4">{{$subcategories}}</p>
            </div>
            <div style="background-color: #00adbc">
                <span class="bring_right glyphicon glyphicon-user"></span>

                <h3>المنتجات</h3>

                <p class="h4">{{$products}}</p>
            </div>


        </div>
    </div>
</div>

<!--/End Main content container-->


@endsection
