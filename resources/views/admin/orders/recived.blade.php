@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">عرض الطلبات المستلمة</h1>

    <table class="table">
        <tr class="h4 text-center">
            <td>#</td>
            <td>اسم المستخدم</td>
            <td>اسم الطلب</td>
            <td>صورة الطلب</td>
            <td>كمية الطلب</td>
            <td>سعر الطلب</td>
            <td>حالة الطلب</td>
            {{-- <td class="text-center" style="width:20%">التحكم</td> --}}
        </tr>


            <tr class="text-center">
            <td class="english">1</td>
            <td>جعفر باسل الدخيلي</td>
            <td>موكنسة</td>
            <td><img src="#" style="width:200px;height:200px;" alt="صورة الطلب"></td>
            <td class="text-center">3</td>
            <td class="text-center">20.00JD</td>

            <td>0</td>
        </tr>




    </table>








@endsection
