<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'GVI') }} | @yield('title')</title>
    <!-- ========== ICON ========== -->
    <link rel="icon" href="{{ asset('storage/' . company()->favicon) }}">

    <!-- ========== INITIALIZE SWIPER ========== -->
    <script src="{{ url('assets/js/slider.js') }}"></script>

    <!-- ========== BOOTSTRAP LINK ========== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <!-- ========== SWIPER JS LINK ========== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/272eed3989.js" crossorigin="anonymous"></script>

    <!-- ========== MAIN CSS ========== -->
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    @yield('css')
</head>

<body>
    <!-- ==================== NAV SECTION ==================== -->
    <nav class="header">
        <div class="top-header">
            <div class="container-lg">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-4">
                        <a class="d-md-inline-block d-none border-end" href=""><i class="fa-solid fa-phone"></i> {{ company()->phone }}</a>
                        <a href="{{ route('aboutUs') }}">About Us</a>
                    </div>
                    <div class="col-md-6 col-8 text-end">
                        <a href="{{ route('contactUs') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-header">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-12 d-flex">
                        <div class="d-block d-lg-none">
                            <button class="menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar"><i class="fa-solid fa-bars"></i></button>
                        </div>
                        <div class="logo-img"><a href="{{ route('/') }}"><img class="img-fluid" src="{{ asset('storage/' . company()->logo) }}" alt=""></a></div>
                    </div>
                    <div class="col-md-8 col-12">
                        <form id="search-form" action="">
                            <div class="d-flex justify-content-end">
                                <div class="search position-relative">
                                    <label for=""><button type="button" class="fa-solid fa-magnifying-glass"></button></label>
                                    <input type="text" name="search" id="search-input" placeholder="Search for products">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="offcanvasExampleLabel">
                <div class="accordion accordion-flush" id="accordionOne">
                    <div class="accordion-item">
                        <button class="menu-item" id="flushSeven" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><a
                                href="{{ route('/') }}">Home</a></button>
                    </div>
                    <div class="accordion-item">
                        <button class="menu-item" id="flushOne" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><a
                                href="{{ route('brands') }}">Brands</a></button>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed menu-item" id="flushTwo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo"><a href="{{ route('category') }}">Category</a></button>
                    </div>
                    <div class="accordion-item">
                        <button class="menu-item" id="flushSeven" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><a
                                href="{{ route('flagship') }}">Flagship Outlet</a></button>
                    </div>
                    <div class="accordion-item">
                        <button class="menu-item" id="flushSeven" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><a
                                href="{{ route('gallery') }}">Gallery</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-header d-lg-block d-none">
            <div class="container-lg container-fluid">
                <ul class="d-flex justify-content-between">
                    <li><a href="{{ route('/') }}" class="menu-item">Home</a>
                    </li>
                    <li><a href="{{ route('brands') }}" class="menu-item">Brands</a>
                    </li>
                    <li><a href="{{ route('category') }}" class="menu-item">Category</a>
                    </li>
                    <li><a href="{{ route('flagship') }}" class="menu-item">Flagship Outlet</a>
                    </li>
                    <li><a href="{{ route('gallery') }}" class="menu-item">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ==================== NAV SECTION END ==================== -->

    @yield('content')

    <!-- ==================== FOOTER SECTION ==================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-logo mx-md-auto"><a href="index.html"><img src="{{ asset('storage/' . company()->footer_logo) }}" alt="" class="img-fluid"></a></div>
            <div class="footer-social">
                <ul class="d-flex justify-content-md-center">
                    <li><a class="item" href="{{ company()->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="item" href="{{ company()->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a class="item" href="{{ company()->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a class="item" href="{{ company()->twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="footer-link">
                <ul class="d-md-flex justify-content-center ">
                    <li><a class="item" href="{{ route('aboutUs') }}">About Us</a></li>
                    <li><a class="item" href="{{ route('brands') }}">Brands</a></li>
                    <li><a class="item" href="{{ route('contactUs') }}">Contact Us</a></li>
                    <li><a class="item" href="{{ route('career') }}">Careers</a></li>
                </ul>
            </div>
            <div class="footer-copyright">
                <p>&copy; {{date('Y')}}, GLOBAL VILLAGE INTERNATIONAL</p>
            </div>
        </div>
    </footer>
    <!-- ==================== FOOTER SECTION END ==================== -->

    <!-- ========== JQUERY SCRIPT LINK ========== -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- ========== BOOTSTRAP SCRIPT LINK ========== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- ========== SWIPER JS SCRIPT LINK ========== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- ========== INITIALIZE SWIPER ========== -->
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <!-- ========== INITIALIZE SWIPER ========== -->
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
    @yield('js')
</body>

</html>
