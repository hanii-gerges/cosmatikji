@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">عرض الطلبات المستلمة</h1>

    <table class="table">
        <tr class="h4 text-center">
            <td>#</td>
            <td>رقم السلة</td>
            <td>الاسم الاول</td>
            <td>الاسم الاخير</td>
            <td>رقم الهاتف</td>
            <td>الحالة الاولى</td>
            <td>العنوان</td>
            <td>حالة الطلب</td>
            {{-- <td class="text-center" style="width:20%">التحكم</td> --}}
        </tr>

        @foreach ($orders as $order)
        <tr class="text-center">
            <td class="english">{{$order->id}}</td>
            <td>{{$order->cart_id}}</td>
            <td>{{$order->firstName}}</td>
            <td>{{$order->lastName}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->state}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->status}}</td>
        </tr>
        @endforeach





    </table>



{{ $orders->links() }}




@endsection


