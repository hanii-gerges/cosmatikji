<div class="row header_section">
    <div class="col-sm-3 col-xs-12 logo_area bring_right">
        <h1 class="inline-block"><img src="{{asset('back-end/img/logo.png')}}" alt="">لوحة تحكم</h1>
        <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
              data-placement="right" title="Tooltip on left"></span>
    </div>
    <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">

        <div class="inline-block full_screen bring_right hidden-xs">
            <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                  title="شاشة كاملة"></span>
        </div>
    </div>
    <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">

        <div class="user_info inline-block">
            @if(auth()->user()->getFirstMedia())
            <img src="{{ auth()->user()->getFirstMedia()->getUrl() }}" alt="Product Image" class="img-circle">
          @else
            <img src="{{ asset('back-end/img/Admin.jpg') }}" alt="Product Image" class="img-circle">
          @endif
            <span class="h4 nomargin user_name">{{Auth::user()->name}}</span>
            <span class="glyphicon glyphicon-cog"></span>
        </div>
    </div>
</div>
