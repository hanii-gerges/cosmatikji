@extends('admin.layout')

@section('content')

        <div class="page_content">
            <div class="page_content">
                <div class="home_statics text-center">
                    <h1 class="heading_title">احصائيات عامة للموقع</h1>

                    <div style="background-color: #e67e22">
                        <span class="bring_right glyphicon glyphicon-user"></span>

                        <h3>عددالمستخدمين</h3>

                        <p class="h4">{{$users}}</p>
                    </div>

                    <div style="background-color: #34495e">
                        <span class="bring_right glyphicon glyphicon glyphicon-gift"></span>

                        <h3>عدد المنتجات</h3>

                        <p class="h4">{{$products}}</p>
                    </div>
                    <div style="background-color: #00adbc">
                        <span class="bring_right glyphicon glyphicon-user"></span>

                        <h3>عدد الموظفين</h3>

                        <p class="h4">{{$employees}}</p>
                    </div>
                    <div style="background-color: #e74c3c">
                        <span class="bring_right glyphicon glyphicon-remove"></span>

                        <h3>طلبات غير مستلمه</h3>

                        <p class="h4">0</p>
                    </div>

                    <div style="background-color: #2ecc71">
                        <span class="bring_right glyphicon glyphicon-ok"></span>

                        <h3>طلبات مستلمه</h3>

                        <p class="h4">0</p>
                    </div>

                </div>
            </div>
        </div>

    <!--/End Main content container-->




@endsection
