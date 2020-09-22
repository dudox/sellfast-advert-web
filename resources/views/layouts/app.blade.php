<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SellfastNG &mdash; Advertise on our Instagram page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('desktop/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('desktop/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('desktop/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('desktop/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('desktop/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/css/lightgallery.min.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/css/swiper.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('desktop/css/style.css')}}">
    @yield('styles')

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>




    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="#" class="text-black h2 mb-0">SellfastNG</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Route::is('pricing') ? 'active' : '' }}"><a href="{{route('pricing')}}" >Advert rate</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                    <a href="#" class="pl-1 pr-1"> Reach us on </a>
                  </li>
                <li>
                  <a href="https://wa.me/2348127584647" class="pl-3 pr-3"><span class="icon-whatsapp"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/sellfast.ng/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>

              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>
    <div class="container-fluid" data-aos="fade" data-aos-delay="500">

        @yield('contents')

    </div>

    <div class="footer py-4">
        <div class="container-fluid">
          <p>
          Copyright &copy<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://sellfast.ng">SellfastNG</a>
          </p>
        </div>
      </div>





      </div>

      <script src="{{asset('desktop/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('desktop/js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{asset('desktop/js/jquery-ui.js')}}"></script>
      <script src="{{asset('desktop/js/popper.min.js')}}"></script>
      <script src="{{asset('desktop/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('desktop/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('desktop/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('desktop/js/jquery.countdown.min.js')}}"></script>
      <script src="{{asset('desktop/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('desktop/js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{asset('desktop/js/swiper.min.js')}}"></script>
      <script src="{{asset('desktop/js/aos.js')}}"></script>

      <script src="{{asset('desktop/js/picturefill.min.js')}}"></script>
      <script src="{{asset('desktop/js/lightgallery-all.min.js')}}"></script>
      <script src="{{asset('desktop/js/jquery.mousewheel.min.js')}}"></script>

      <script src="{{asset('desktop/js/main.js')}}"></script>

      <script>
        $(document).ready(function(){
          $('#lightgallery').lightGallery();
        });
      </script>

      </body>
    </html>

