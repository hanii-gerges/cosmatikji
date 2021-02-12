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
            <td>تغير حالة الطلب</td>
            <td>حالة الطلب</td>
            {{-- <td class="text-center" style="width:20%">التحكم</td> --}}
        </tr>


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
        </tr>




    </table>








@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // e.preventDefault();
        $('#t').on('submit',function(){
        var _token = $("input[name ='_token']").val();
        var states = $('#states').val();
          $.ajax({
              url:"{{route('test')}}",
              method: "post",
              data:{_token:_token,states:states},
            success: function(data)
           {
            if(data)
            {
             alert(data);
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



