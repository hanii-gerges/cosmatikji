@extends('employee.layout')


@section('content')

<!--Start status alert-->
@if (session('success'))
<div role="alert" class="alert alert-success">{{session('success')}} </div>
@endif
<!--/End status alert-->

<!--Start Site Main Options and Data-->
<div class="panel panel-default view_users" style="margin: 10px;">
    <div class="panel-heading text-right h4">عرض كل الأصناف الرئيسية</div>

    <table class="table">
        <tr class="h4 text-center">
            <td class="">#</td>
            <td class="">اسم الصنف</td>
            <td class="">التحكم</td>
        </tr>

            @foreach ($categories as $category)
            <tr class="text-center">
            <td class="english">{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td class="text-center">
                <a href="{{route('edit.cat',$category->id)}}" class="glyphicon glyphicon-pencil text-info"></a>
                <a href="{{route('delete.cat',$category->id)}}" class="glyphicon glyphicon-trash text-danger" onclick="return confirm('هل انتا متأكد من انك تريد حذف الصنف');"></a>
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
<span class="text-center">{{  $categories->links() }}</span>
@endsection
