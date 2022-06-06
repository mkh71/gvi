@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <!-- ==================== BANNER SECTION ==================== -->
    <section class="banner">
        <div class="container">
            <div class="swiper banner-slider">
                <div class="swiper-wrapper">
                    @foreach($data['slider'] as $slider)
                    <div class="item swiper-slide">
                        <img class="img-fluid" src="{{asset('storage/'. $slider->image)}}" alt="{{$slider->title}}">
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ==================== BANNER SECTION END ==================== -->

    <!-- ==================== GREETING SECTION ==================== -->
    <section class="greeting">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="greeting-content">
                        <span class="text-uppercase d-flex">WELCOME TO Global Village International</span>
                        <img src="{{asset('storage/'.$data['image']->home)}}" alt="" class="img-fluid d-block d-md-none pt-50">
                        <h2>Your Partner for Premium Beauty Brands</h2>
                        <p>{!! substr(company()->about, 0, 500)  !!} </p>
                        <a href="{{route('aboutUs')}}">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="greeting-img">
                        <img src="{{asset('storage/'.$data['image']->home)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== GREETING SECTION END ==================== -->

    <!-- ==================== PRODUCT SECTION ==================== -->
    <section class="product">
        <div class="container">
            <div class="section-title">
                <h4>PRODUCT CATEGORIES</h4>
            </div>
            <div class="row">
                @foreach($data['categories'] as $category)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('storage/'.$category->image)}}" alt="{{$category->name}}" class="img-fluid">
                        <a href="{{ $category->back_link ?? "#" }}" class="overly" target="_blank">
                            <div class="overflow">
                                <h3>{{$category->name}}</h3>
                                <p>
                                    Shop Now <i class="fa-solid fa-arrow-right"></i>

                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==================== PRODUCT SECTION END ==================== -->

    <!-- ==================== BRAND SECTION ==================== -->
    <section class="brand">
        <div class="container">
            <div class="section-title">
                <h4>BRANDS</h4>
            </div>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    @foreach($data['brands'] as $brand)
                    <div class="item swiper-slide">
                        <a href="{{ $brand->back_link }}" target="_blank">
                            <img src="{{ asset('storage/'.$brand->image) }}" alt="{{ $brand->name }}" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== BRAND SECTION END ==================== -->

@stop
@section('js')
    <script>
        var swiper = new Swiper(".banner-slider", {
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper = new Swiper(".brand-slider", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
@stop
