@extends('admin.layout')


@section('content')



<!--Start Site Main Options and Data-->
<div class="panel panel-default view_users" style="margin: 10px;">
    <div class="panel-heading text-right h4">عرض كل الرسائل</div>

    <table class="table">
        <tr class="h4 text-center">
            <td class="" style="width:5%">#</td>
            <td class="" style="width:10%">الاسم الاول</td>
            <td class="" style="width:10%">الاسم الاخير</td>
            <td class="" style="width:20%">البريد الالكتروني</td>
            <td class="" style="width:20%">الموضوع</td>
            <td class="" style="width:35%">الرسالة</td>
            <td class="text-center" style="width:20%">التحكم</td>
        </tr>

            @foreach ($messages as $msg)
            <tr class="text-center">
            <td class="english">{{$msg->id}}</td>
            <td>{{$msg->first_name}}</td>
            <td> {{$msg->last_name}}</td>
            <td>{{$msg->email}}</td>
            <td>{{$msg->subject}}</td>
            <td class="english">{{$msg->message}}</td>
            <td class="text-center">
                <a href="{{route('delete.message',$msg->id)}}" class="glyphicon glyphicon-trash text-danger" onclick="return confirm('هل انتا متأكد من انك تريد حذف الرسالة');"></a>
            </td>
        </tr>
            @endforeach



    </table>



</div>
<!--End Site Main Options and Data-->
<span class="text-center">{{  $messages->links() }}</span>
@endsection
