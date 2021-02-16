
<div class="main_sidebar bring_right">
    <div class="main_sidebar_wrapper">
        <ul>
            <li><span class="glyphicon glyphicon-home"></span><a href="{{route('emp.home')}}">الصفحة الرئيسية</a></li>
            <li><span class="glyphicon glyphicon-plus-sign"></span><a href="#">إدارة الأقسام الرئيسية</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('create.cat')}}">إضافة جديد</a></li>
                    <li><a href="{{route('view.all.cat')}}">عرض الكل</a></li>
                </ul>
            </li>
            <li><span class="glyphicon glyphicon-ok-sign"></span><a href="#">إدارة الأقسام الفرعية</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('add.subCat')}}">إضافة جديد</a></li>
                    <li><a href="{{route('view.all.subCat')}}">عرض الكل</a></li>
                </ul>
            </li>
            <li><span class="glyphicon glyphicon-ok"></span><a href="#">إدارة المنتجات</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('add.product')}}">إضافة جديد</a></li>
                    <li><a href="{{route('emp.add.multipic')}}">إضافة صور للمنتج</a></li>
                    <li><a href="{{route('view.all.product')}}">عرض الكل</a></li>
                </ul>
            </li>
            {{-- <li><span class="glyphicon glyphicon-envelope"></span><a href="#">عرض الرسائل</a></li> --}}

        </ul>
    </div>
</div>
