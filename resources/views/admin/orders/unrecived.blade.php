@extends('admin.layout')


@section('content')
<div class="page_content">

    <h1 class="heading_title">عرض الطلبات غير المستلمة</h1>

    <table class="table">
        <tr class="h4 text-center">
            {{-- <td>#</td>
            <td>اسم المستخدم</td>
            <td>اسم الطلب</td>
            <td>صورة الطلب</td>
            <td>كمية الطلب</td>
            <td>سعر الطلب</td>
            <td>تغير حالة الطلب</td>
            <td>حالة الطلب</td> --}}
            <td>#</td>
            <td>رقم السلة</td>
            <td>الاسم الاول</td>
            <td>الاسم الاخير</td>
            <td>رقم الهاتف</td>
            <td>الحالة الاولى</td>
            <td>العنوان</td>
            <td>تغير حالة الطلب</td>
            <td>حالة الطلب</td>
            {{-- <td class="text-center" style="width:20%">التحكم</td> --}}
        </tr>

{{--
            <tr class="text-center">
            <td class="english">1</td>
            <td>جعفر باسل الدخيلي</td>
            <td>جرافة</td>
            <td><img src="#" style="width:200px;height:200px;" alt="صورة الطلب"></td>
            <td class="text-center">3</td>
            <td class="text-center">20.00JD</td>
            <td class="text-center">
                    <form id="t">
                        @csrf
                        <input type="hidden"  value="1" id="states" name="states">
                        <button type="submit" class="btn btn-success">تم التسليم</button>
                    </form>


            </td>
            <td>0</td>
        </tr> --}}


        @foreach ($orders as $order)
        <tr class="text-center">
            <td class="english">{{$order->id}}</td>
            <td>{{$order->cart_id}}</td>
            <td>{{$order->firstName}}</td>
            <td>{{$order->lastName}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->state}}</td>
            <td>{{$order->address}}</td>
            <td class="text-center">
                <form id="t">
                    @csrf
                    {{-- <input type="hidden"  value="1" id="states" name="states"> --}}
                    <input type="hidden"  value="{{$order->id}}" id="id" name="id">
                    <button type="submit" class="btn btn-success">تم التسليم</button>
                </form>

            </td>
            <td>{{$order->status}}</td>
        </tr>
        @endforeach





    </table>




{{-- {{ $orders->links() }} --}}



@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // e.preventDefault();
        $('#t').on('submit',function(){
        var _token = $("input[name ='_token']").val();
        // var states = $('#states').val();
        var id = $('#id').val();
          $.ajax({
              url:"{{route('change.status')}}",
              method: "post",
              data:{_token:_token,id:id},
            success: function(data)
           {
            if(data)
            {
             toastr.success(data);
            }else
            {
                alert('failed')
            }

           }
          });

        //   var states = $('#states').val();
        //   var _token = $("input[name='_token']").val();
        //   alert(states);


       });


    });

    </script>



