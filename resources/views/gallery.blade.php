@extends('layouts.main')
@section('title', 'Gallery')
@section('content')

    <!-- ==================== HEAD OFFICE SECTION ==================== -->
    <section class="container">
        <div class="section-title">
            <h4>HEAD OFFICE</h4>
        </div>
        <div class="swiper headOffice-slider">
            <div class="swiper-wrapper">
                @foreach($data['ho'] as $ho)
                <div class="item swiper-slide">
                    <a class="headOfficeImg" data-gall="headOfficeGly" href="{{asset('storage/'.$ho->image)}}">
                        <img class="img-fluid" src="{{asset('storage/'.$ho->image)}}" />
                    </a>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- ==================== HEAD OFFICE SECTION END ==================== -->

    <!-- ==================== NATIONAL SECTION ==================== -->
    <section class="container">
        <div class="section-title">
            <h4>NATIONAL TRAINING</h4>
        </div>
        <div class="scroll_section" id="national-section">
            <div class="scroll_container">
                @foreach($data['nt'] as $l=>$ntLoc)
                   @foreach($ntLoc as  $dt=>$ntDate)
                    <div onmouseenter="slider('{{strtotime($dt)}}')" class="section-item scroll_item">
                        <h4 class="d-flex"> {{$l}} <span>{{ date('d/m/Y', strtotime($dt)) }}</span></h4>
                        <div id="{{strtotime($dt)}}" class="item slider">
                            <div class="slider_inner">
                                @foreach($ntDate as $dt)
                                    @php($i = count($ntDate))
                                <div class="slide_item slide_item_active">
                                    <a class="national1Img" data-gall="national1Gly" href="{{asset('storage/'.$dt->image)}}"><img src="{{asset('storage/'.$dt->image)}}" /></a>
                                </div>
                                @endforeach
                            </div>
                            <div class="slider_pagination">
                                @for($x= 1; $x<= $i; $x++)
                                    <div class="pagination_icon"></div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach

            </div>
            <button class="pre_btn"><img src="{{asset('assets/')}}/img/arrow/left_arrow.svg" alt=""></button>
            <button class="nxt_btn"><img src="{{asset('assets/')}}/img/arrow/right_arrow.svg" alt=""></button>
        </div>
    </section>
    <!-- ==================== NATIONAL SECTION END ==================== -->

    <!-- ==================== ANNUAL SECTION ==================== -->
    <section class="container">
        <div class="section-title">
            <h4>ANNUAL CONFERENCE</h4>
        </div>
        <div class="scroll_section" id="annual-section">
            <div class="scroll_container">
                @foreach($data['ac'] as $ayk => $ay)
                <div onmouseenter="slider('{{$ayk}}')" class="section-item scroll_item">
                    <h4>{{$ayk}}</h4>
                    <div id="{{$ayk}}" class="item slider">
                        <div class="slider_inner">
                            @foreach($ay as $ac)
                                @php($i = count($ay))
                            <div class="slide_item slide_item_active">
                                <a class="annual1Img" data-gall="annual1Gly" href="{{asset('storage/'.$ac->image)}}"><img src="{{asset('storage/'.$ac->image)}}" /></a>
                            </div>
                            @endforeach
                        </div>
                        <div class="slider_pagination">
                            @for($x= 1; $x<= $i; $x++)
                            <div class="pagination_icon"></div>
                            @endfor
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="pre_btn"><img src="{{asset('assets/')}}/img/arrow/left_arrow.svg" alt=""></button>
            <button class="nxt_btn"><img src="{{asset('assets/')}}/img/arrow/right_arrow.svg" alt=""></button>
        </div>
    </section>
    <!-- ==================== ANNUAL SECTION END ==================== -->

    <!-- ==================== DITF SECTION ==================== -->
    <section class="container">
        <div class="section-title">
            <h4>DITF PARTICIPATION</h4>
        </div>
        <div class="scroll_section" id="ditf-section">
            <div class="scroll_container">
                @foreach($data['dp'] as $dpk => $dpy)
                    <div onmouseenter="slider('{{$ayk}}')" class="section-item scroll_item">
                        <h4>{{$dpk}}</h4>
                        <div id="{{$dpk}}" class="item slider">
                            <div class="slider_inner">
                                @foreach($dpy as $dp)
                                    @php($i = count($dpy))
                                    <div class="slide_item slide_item_active">
                                        <a class="ditf1Img" data-gall="ditf1Gly" href="{{asset('storage/'.$dp->image)}}"><img src="{{asset('storage/'.$dp->image)}}" /></a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider_pagination">
                                @for($x= 1; $x<= $i; $x++)
                                    <div class="pagination_icon"></div>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="pre_btn"><img src="{{asset('assets/')}}/img/arrow/left_arrow.svg" alt=""></button>
            <button class="nxt_btn"><img src="{{asset('assets/')}}/img/arrow/right_arrow.svg" alt=""></button>
        </div>
    </section>
    <!-- ==================== DITF SECTION END ==================== -->

    <!-- ==================== MAGAZINE SECTION ==================== -->
    <section class="container">
        <div class="section-title">
            <h4>MAGAZINE</h4>
        </div>
        <div class="magazine-section swiper">
            <div class="swiper-wrapper">
                @foreach($data['mg'] as $mg)
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('storage/'.$mg->image)}}" alt="">
                    <h2 class="text-center">{{$mg->title}}</h2>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- ==================== MAGAZINE SECTION END ==================== -->

@stop
@section('js')
    <script>

        new VenoBox({
            selector: ".headOfficeImg"
        });
        new VenoBox({
            selector: ".national1Img"
        });
        new VenoBox({
            selector: ".annual1Img"
        });
        new VenoBox({
            selector: ".ditf1Img"
        });

        var swiper = new Swiper(".headOffice-slider", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
        var swiper = new Swiper(".magazine-section", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
    </script>
@stop
