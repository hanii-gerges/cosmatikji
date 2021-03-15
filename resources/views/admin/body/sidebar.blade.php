
<div class="main_sidebar bring_right">
    <div class="main_sidebar_wrapper">

        <ul>
            <li><span class="glyphicon glyphicon-home"></span><a href="{{route('admin.dashboard')}}">الصفحة الرئيسية</a></li>
            <li><span class="glyphicon glyphicon-user"></span><a href="">إدارة الاعضاء</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('create.emp')}}">إضافة جديد</a></li>
                    <li><a href="{{route('view.all.emp')}}">عرض الكل</a></li>
                </ul>
            </li>
            {{-- <li><span class="glyphicon glyphicon-user"></span><a href="#">الرسائل</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('create.emp')}}">كتابة رسالة للموظف</a></li>
                    <li><a href="{{route('view.all.emp')}}">عرض الكل</a></li>
                </ul>
            </li> --}}
            <li><span class="glyphicon glyphicon-plus-sign"></span><a href="#">إدارة الأقسام الرئيسية</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('admin.create.cat')}}">إضافة جديد</a></li>
                    <li><a href="{{route('admin.view.all.cat')}}">عرض الكل</a></li>
                </ul>
            </li>
            <li><span class="glyphicon glyphicon-ok-sign"></span><a href="#">إدارة الأقسام الفرعية</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('admin.add.subCat')}}">إضافة جديد</a></li>
                    <li><a href="{{route('admin.view.all.subCat')}}">عرض الكل</a></li>
                </ul>
            </li>
            <li><span class="glyphicon glyphicon-ok"></span><a href="#">إدارة المنتجات</a>
                <ul class="drop_main_menu">
                    <li><a href="{{route('admin.add.product')}}">إضافة جديد</a></li>
                    <li><a href="{{route('admin.view.all.product')}}">عرض الكل</a></li>
                </ul>
            </li>

            <li><span class="glyphicon glyphicon-lock"></span><a href="#">إدارة الطلبات</a>
                <ul class="drop_main_menu">
                    <li><a href="/orders?status=0">عرض الطلبات غير المستلمة</a></li>
                    <li><a href="/orders?status=1">عرض الطلبات المستلمة</a></li>
                </ul>
            </li>

            <li><span class="glyphicon glyphicon-envelope"></span><a href="{{route('view.message')}}">عرض الرسائل</a></li>

        </ul>
    </div>
</div>
