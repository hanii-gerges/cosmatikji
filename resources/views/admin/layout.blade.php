<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/ar.css')}}" rel="stylesheet" class="lang_css arabic">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
   @include('admin.body.header')
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="{{asset('backend/img/user.jpg')}}">

                <h1 class="h3">حسام جمال زوين</h1>

                <p><a href="#">بيانات المستخدم</a></p>

                <p><a href="#">تغيير كلمة المرور</a></p>

                <p><a href="{{route('logout')}}">تسجيل الخروج</a></p>
            </div>
            <div class="who_is_online">
                <h3>العامليين حاليا علي النظام</h3>

                <div class="employee_online">
                    <img src="{{asset('backend/img/user.jpg')}}" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="{{asset('backend/img/user.jpg')}}" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>


            </div>
        </div>
        <!--/End left sidebar-->
        <!--Start Side bar main menu-->
        @include('admin.body.sidebar')

        <!--/End side bar main menu-->


        <!--Start Main content container-->
        <div class="main_content_container">
    <div class="main_container  main_menu_open">
         <!--Start system bath-->
         <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">الصفحة الرئيسية للوحة تحكم الموقع</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        @yield('content')
        </div>
        </div>
        <!--/End body container section-->


    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('backend/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/js.js')}}"></script>
</body>

</html>
