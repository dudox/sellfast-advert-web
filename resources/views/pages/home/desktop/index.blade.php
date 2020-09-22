@extends('layouts.app')

@section('contents')
<div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-wrap">

                    <img src="{{asset('mobile/images/banners/01.JPG')}}" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                    <img src="{{asset('mobile/images/banners/02.JPG')}}" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                    <img src="{{asset('mobile/images/banners/03.JPG')}}" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                    <img src="{{asset('mobile/images/banners/04.JPG')}}" alt="Image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-wrap">
                    <img src="{{asset('mobile/images/banners/05.JPG')}}" alt="Image">
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>
@endsection
