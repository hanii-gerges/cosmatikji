@extends('employee.layout')


@section('content')
<!--Start status alert-->
@if (session('success'))
<div role="alert" class="alert alert-success">{{session('success')}} </div>
@endif
<!--/End status alert-->

<!--Start Site Main Options and Data-->
<div class="panel panel-default view_users" style="margin: 10px;">
    <div class="panel-heading text-right h4">عرض كل الصور الخاصة بالمنتج</div>

    <table class="table">
        <tr class="h4 text-center">
            <td>#</td>
            <td>اسم المنتج</td>
            <td>الصورة</td>
            <td class="text-center" style="width:20%">التحكم</td>
        </tr>

            @foreach ($images as $img)
            <tr class="text-center">
            <td class="english">{{$img->id}}</td>
            <td>{{$img->product->name}}</td>
            <td><img src="{{asset($img->image)}}" style="width:200px;height:200px;"></td>
            <td class="text-center">
                <a href="{{route('emp.edit.img',$img->id)}}" class="glyphicon glyphicon-pencil text-info"></a>
                <a href="{{route('emp.delete.img',$img->id)}}" class="glyphicon glyphicon-trash text-danger" onclick="return confirm('هل انتا متأكد من انك تريد حذف الموظف');"></a>
            </td>
        </tr>
            @endforeach



    </table>

</div>
<!--End Site Main Options and Data-->
<span class="text-center">{{  $images->links() }}</span>




@endsection
