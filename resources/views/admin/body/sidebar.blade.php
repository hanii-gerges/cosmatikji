
<div class="main_sidebar bring_right">
    <div class="main_sidebar_wrapper">

        <ul>
            <li><span class="glyphicon glyphicon-home"></span><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><span class="glyphicon glyphicon-user"></span><a href="#">إدارة الاعضاء</a>
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
            <li><span class="glyphicon glyphicon-envelope"></span><a href="#">عرض الرسائل</a></li>

        </ul>
    </div>
</div>
