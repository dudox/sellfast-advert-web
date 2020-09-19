<!DOCTYPE HTML>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
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
        <div id="menu-list" data-selected="menu-index" data-load="menu-list.html" data-height="415"
            class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="menu-demo.html" data-height="210" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-find" data-load="menu-find.html" data-height="420" class="menu-box menu-load menu-bottom"></div>
        <div class="header header-scroll-effect">
            <div class="header-line-1 header-hidden header-logo-left">
                <a href="#" class="back-button">
                    <img src="{{asset('assets/images/logo.png')}}" style="width: 30px; margin: 5px 0px 10px 10px" alt="">
                </a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i data-feather="globe"></i></a>
                <a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i data-feather="message-square"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3 "><i data-feather="instagram"></i></a>
            </div>
            <div class="header-line-2 header-scroll-effect" >
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">Welcome</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i data-feather="globe"></i></a>
                <a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i data-feather="message-square"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3 "><i data-feather="instagram"></i></a>
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

                        <div class="overlay overlay-gradient-large"></div>
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
                    <p class="center-text" style="margin: 0%;">
                        Follow us on our instagram handle
                    </p>
                    <a href="homepages.html"
                        class="shadow-small button button-s button-center-large button-rounded bg-highlight uppercase ultrabold" style="background: #af4581 !important">
                        Follow sellfastNG
                    </a>
                </div>
                <div class="content call-to-action-1">
                    <h1 class="center-text font-24">Our Hotline</h1>
                    <p class="center-text" style="margin: 0%;">
                        Our support team is available 24/7 to attend to your needs. feel free to interract with us
                    </p>
                    <div class="one-half" >
                        <a href="#"
                            class="shadow-small button button-s button-full button-rounded bg-highlight uppercase ultrabold">Call
                            Now</a>
                    </div>
                    <div class="one-half last-column">
                        <a href="#"
                            class="shadow-small button button-s button-full button-rounded button-green uppercase ultrabold">Whatsapp Now</a>
                    </div>
                </div>
            </div>
            <span class="center-text font-10 bottom-20 color-night-light">Swipe me to the left. Multiple Call To Actions
                are Available</span>
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
