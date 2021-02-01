@extends('admin.layout')


@section('content')

<!--Start status alert-->
@if (session('success'))
<div role="alert" class="alert alert-success">{{session('success')}} </div>
@endif
<!--/End status alert-->

<!--Start Site Main Options and Data-->
<div class="panel panel-default view_users" style="margin: 10px;">
    <div class="panel-heading text-right h4">عرض كل الاقسام</div>

    <table class="table">
        <tr class="h4 text-center">
            <td class="" style="width:5%">#</td>
            <td class="" style="width:15%">اسم الموظف</td>
            <td class="" style="width:40%">البريد الالكتروني</td>
            <td class="" style="width:20%">نوع الموظف</td>
            <td class="text-center" style="width:20%">التحكم</td>
        </tr>

            @foreach ($employees as $employee)
            <tr class="text-center">
            <td class="english">{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td class="english">{{$employee->utype}}</td>
            <td class="text-center">
                <a href="{{route('admin.edit.emp',$employee->id)}}" class="glyphicon glyphicon-pencil text-info"></a>
                <a href="{{route('delete.emp',$employee->id)}}" class="glyphicon glyphicon-trash text-danger" onclick="return confirm('هل انتا متأكد من انك تريد حذف الموظف');"></a>
            </td>
        </tr>
            @endforeach



    </table>


    {{-- <nav class="english text-center ltr">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> --}}

</div>
<!--End Site Main Options and Data-->
<span class="text-center">{{  $employees->links() }}</span>
@endsection
