<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="header row">
    <ul class="menu col-md-9 tm-site-name">
        <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Code</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Hot</a></li>
    </ul>
</div>
<div class="web-info row">
    <div class="col-md-2">
        <div class="image-holder one" id="pic_prof_1" style="display:block">
            @for ($i = 1; $i <= 7; $i++)
            <img class="head-image {{$i}} circle" src="/img/head/{{$i}}.png" width="150"
                 height="150" alt=""/>
            @endfor
        </div>
    </div>
    <div class="col-md-7 text-left desc-info">
        <table style="border-collapse:separate; border-spacing:0px 10px;">
            <thead>
            <th colspan="2">蒙子鱼 麻麻</th>
            </thead>
            <tr>
                <td width="40%">Github:Evadu</td>
                <td>职业：程序研发 & 网站设计 & 攻程狮</td>
            </tr>
            <tr>
                <td>Github:Evadu</td>
                <td>职业：程序研发 & 网站设计 & 攻程狮</td>
            </tr>
            <tr>
                <td colspan="2">个人描述:个人描述个人描述个人描述个人描述个人描述个人描述个人描述个人描述个人描述个人描述个人描述个人描述</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1" style="padding-left: 10px;margin-top: 30px;color: #00262c">
       <p> 单IP访问：<span style="color: #880000">?</span></p>
        <p>新用户：<span style="color: #880000">?</span></p>
        <p>新博文：<span style="color: #880000">?</span></p>
    </div>
    <div class="col-md-2">
        <img src="{{asset('img/coder.png')}}" style="margin-top: -70px">
    </div>
</div>
<div class="login_info row">
  您好，欢迎您访问本博客！请<a>登录</a> &nbsp;&nbsp;&nbsp;消息&nbsp;&nbsp;&nbsp;用户各种&nbsp;&nbsp;&nbsp;用户各种&nbsp;&nbsp;&nbsp;用户各种
</div>
<div id="app" class="content">
    @yield('content')
</div>
<div class="footer text-center">
    <a href="#" STYLE="color: #000000">csdn</a>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/HeadImage.js') }}"></script>
<script>
    /**
     * Created by dudenglan on 2017/5/25.
     */
    var mouseX;
    var mouseY;
    var imageOne;
    $(window).resize(imageInit);

    /* Setting the mousemove event caller */
    $(window).mousemove(getMousePosition);

    /* This function is called on document ready, on load and on resize
     * and initiallizes all the images */
    function imageInit() {

        /* Instanciate the mouse position variables */
        mouseX = 0;
        mouseY = 0;

        /* Instanciate a HeadImage class for every image */
        imageOne = new HeadImage("one");
    }
    function getMousePosition(event) {
        /* Setting the mouse position variables */
        mouseX = event.pageX;
        mouseY = event.pageY;
        imageOne.setImageDirection();
    }
    $(imageInit());
</script>
</body>
</html>
