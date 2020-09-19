<!DOCTYPE HTML>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>SellfastNG</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/framework.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
    <div id="preloader" class="preloader-light">
        <h1 style="margin-bottom:10px; left:50%">
            <center>
                <img src="{{asset('assets/images/logo.png')}}" style="width: 60px" alt="">
            </center>
        </h1>
        <div id="preload-spinner"></div>
        <p style="font-size: 15px; font-weight: 700">“Nobody counts the number of ads you run; they just remember the impression you make.”</p>
        <em><span class="font-weght-bold" style="font-weight: 900; font-size: 14px">Powered by sellfastNG</span></em>
    </div>
    <div id="page-transitions" class="page-build light-skin highlight-blue">




        <div id="menu-hider"></div>
        <div id="menu-list" data-selected="menu-index" data-load="{{route('menu')}}" data-height="415" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="{{ route('settings') }}" data-height="210" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-find" data-load="menu-find.html" data-height="420" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-starter" data-load="{{ route('starter') }}" data-height="460" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-premium" data-load="{{ route('premium') }}" data-height="460" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-vip" data-load="{{ route('vip') }}" data-height="460" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-basic" data-load="{{ route('basic') }}" data-height="360" class="menu-box menu-load menu-bottom"></div>




        <div class="header header-scroll-effect">
            <div class="header-line-1 header-hidden ">
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">SellfastNG</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i data-feather="menu"></i></a>
                <a href="https://wa.me/2348127584647" target="_blank" class="header-icon header-icon-2 "><i class="fab fa-whatsapp" style="font-size: 24px; color: #2980b9;"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i data-feather="settings"></i></a>

            </div>
            <div class="header-line-2 header-scroll-effect">
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">SellfastNG</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i data-feather="menu"></i></a>
                <a href="https://wa.me/2348127584647" target="_blank" class="header-icon header-icon-2 "><i class="fab fa-whatsapp" style="font-size: 24px; color: #2980b9;"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i data-feather="settings"></i></a>

            </div>
        </div>
        <div class="page-content header-clear-large">
            <div class="slider-margins">
                <div class="single-slider owl-carousel owl-no-dots">
                    <div class="item shadow-small">

                        <div class="overlay bg-black opacity-50"></div>
                        <img src="{{asset('assets/images/banners/01.JPG')}}" alt="img">
                    </div>
                    <div class="item shadow-small">

                        <div class="overlay bg-black opacity-50"></div>
                        <img src="{{asset('assets/images/banners/02.JPG')}}" alt="img">
                    </div>
                    <div class="item shadow-small">

                        <div class="overlay bg-black opacity-50"></div>
                        <img src="{{asset('assets/images/banners/03.JPG')}}" alt="img">
                    </div>
                    <div class="item shadow-small">

                        <div class="overlay bg-black opacity-50"></div>
                        <img src="{{asset('assets/images/banners/04.JPG')}}" alt="img">
                    </div>
                    <div class="item shadow-small">

                        <div class="overlay bg-black opacity-50"></div>
                        <img src="{{asset('assets/images/banners/05.JPG')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="simple-slider owl-carousel owl-no-dots top-30">
                <div class="content call-to-action-1">
                    <h1 class="center-text font-30">
                        <center>
                            <img style="width: 150px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="">
                        </center>
                    </h1>
                    <p class="center-text" style="margin: 0px 0px 15px 0px; line-height:22px; color: #000;  font-size:14px">
                        Over 21,000 people advertise on our Instagram page
                    </p>
                    <a href="https://www.instagram.com/sellfast.ng/" class="shadow-small button button-s button-center-large button-rounded bg-highlight uppercase ultrabold" style="background: #af4581 !important">
                        Click here to follow us <i class="fa fa-mouse-pointer" style="padding: 0 0 0 10px; font-size: 20px"></i>
                    </a>
                </div>
                {{-- <div class="content call-to-action-1">
                    <h1 class="center-text font-24">Our Hotline</h1>
                    <p class="center-text" style="margin: 0%;">
                        Our support team is available 24/7 to attend to your needs. feel free to interract with us
                    </p>
                    <div class="one-half">
                        <a href="#" class="shadow-small button button-s button-full button-rounded bg-highlight uppercase ultrabold">Call
                            Now</a>
                    </div>
                    <div class="one-half last-column">
                        <a href="#" class="shadow-small button button-s button-full button-rounded button-green uppercase ultrabold">Whatsapp Now</a>
                    </div>
                </div> --}}
            </div>
            <div class="decoration decoration-margins"></div>
            <div class="content-title bottom-20">
                <span class="color-highlight" style="font-size: 14px; margin-bottom:0px">Choose a plan</span>
                <h1 style="font-size: 21px; line-height:20px">Advertise on our Instagram <br/>page</h1>
                <a class="color-highlight">See All</a>
            </div>
            <div class="slider-margins bottom-30">
                <div class="double-slider owl-carousel owl-no-dots">
                    <a href="#" data-menu="menu-starter" class="item bottom-10 shadow-small" style="padding: 20px; background: #fbbc24; color:#000;">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color- uppercase ultrabold"><i
                                    class="fa fa-star top-20 fa-lg"></i></strong>
                        </div>
                        <br>
                        <div class="bottom-10 ">
                            <h1 class="color- bolder">Starter pack</h1>
                            <h5 class="color- font-11">Online payment.</h5>
                        </div>

                    </a>
                    <a href="#" data-menu="menu-premium" class="item bottom-10 shadow-small" style="padding: 20px; background:#f83265; color: #000;">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color- uppercase ultrabold"><i
                                    class="fa fa-award top-20 fa-lg"></i></strong>
                        </div>
                        <br>
                        <div class="bottom-10 ">
                            <h1 class="color- bolder">Premium pack</h1>
                            <h5 class="color- font-11">Bank transfer.</h5>
                        </div>

                    </a>
                    <a href="#" data-menu="menu-vip" class="item bottom-10 shadow-small" style="padding: 20px; background:#39b759; color: #000;">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color- uppercase ultrabold"><i
                                    class="fa fa-box top-20 fa-lg"></i></strong>
                        </div>
                        <br>
                        <div class="bottom-10 ">
                            <h1 class="color- bolder">VIP <br/>pack</h1>
                            <h5 class="color- font-11">Bank transfer.</h5>
                        </div>

                    </a>
                    <a href="#" data-menu="menu-basic" class="item bottom-10 shadow-small" style="padding: 20px; background: #727cf5; color:#000;">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color- uppercase ultrabold"><i
                                    class="fa fa-gift top-20 fa-lg"></i></strong>
                        </div>
                        <br>
                        <div class="bottom-10 ">
                            <h1 class="color- bolder">Basic pack</h1>
                            <h5 class="color- font-11">Banks transfer.</h5>
                        </div>

                    </a>
                </div>
            </div>
            <div class="decoration decoration-margins"></div>

        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/scripts/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/scripts/custom.js')}}"></script>
    <script>
        feather.replace()

    </script>
</body>

</html>
