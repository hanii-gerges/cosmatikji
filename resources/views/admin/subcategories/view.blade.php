@extends('admin.layout')


@section('content')

<!--Start status alert-->
@if (session('success'))
<div role="alert" class="alert alert-success">{{session('success')}} </div>
@endif
<!--/End status alert-->

<!--Start Site Main Options and Data-->
<div class="panel panel-default view_users" style="margin: 10px;">
    <div class="panel-heading text-right h4">عرض كل الأقسام الفرعية</div>

    <table class="table">
        <tr class="h4 text-center">
            <td class="">#</td>
            <td class="">اسم القسم الرئيسي</td>
            <td class="">اسم القسم الفرعي</td>
            <td class="">التحكم</td>
        </tr>

            @foreach ($subcategories as $subcategory)
            <tr class="text-center">
            <td class="english">{{$subcategory->id}}</td>
            <td>{{$subcategory->category->name}}</td>
            <td>{{$subcategory->name}}</td>
            <td class="text-center">
                <a href="{{route('admin.edit.subCat',$subcategory->id)}}" class="glyphicon glyphicon-pencil text-info"></a>
                <a href="{{route('admin.delete.subCat',$subcategory->id)}}" class="glyphicon glyphicon-trash text-danger" onclick="return confirm('هل انتا متأكد من انك تريد حذف القسم الفرعي');"></a>
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
<span class="text-center">{{  $subcategories->links() }}</span>
@endsection
