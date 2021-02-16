@extends('admin.layout')


@section('content')

<!--Start status alert-->
@if (session('success'))
<div role="alert" class="alert alert-success">{{session('success')}} </div>
@endif
<!--/End status alert-->

<!--Start Site Main Options and Data-->
<div class="panel panel-default view_users" style="margin: 10px;">
    <div class="panel-heading text-right h4">عرض كل المنتجات</div>

    <table class="table">
        <tr class="h4 text-center">
            <td style="width:2%;">#</td>
            <td style="width:10%;">اسم القسم الفرعي</td>
            <td style="width:15%;">اسم المنتج</td>
            <td style="width:10%;">سعر المنتج</td>
            <td style="width:30%;">صورة المنتج</td>
            <td style="width:33%;">وصف المنتج</td>
            <td >التحكم</td>
        </tr>

            @foreach ($products as $product)
            <tr class="text-center">
            <td class="english">{{$product->id}}</td>
            <td class="english">{{$product->subCategory->name}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
             <td><a href="{{route('admin.show.multipic',$product->id)}}">صور المنتج اضغط هنا</a></td>
            <td>{{$product->description}}</td>
            <td class="text-center">
                <a href="{{route('admin.edit.product',$product->id)}}" class="glyphicon glyphicon-pencil text-info"></a>
                <a href="{{route('admin.delete.product',$product->id)}}" class="glyphicon glyphicon-trash text-danger" onclick="return confirm('هل انتا متأكد من انك تريد حذف المنتج');"></a>
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
<span class="text-center">{{  $products->links() }}</span>
@endsection
