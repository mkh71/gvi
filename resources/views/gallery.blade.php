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
                <div class="item swiper-slide">
                    <a class="headOfficeImg" data-gall="headOfficeGly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img class="img-fluid" src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                </div>
                <div class="item swiper-slide">
                    <a class="headOfficeImg" data-gall="headOfficeGly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img class="img-fluid" src="{{asset('assets/')}}/img/galle2y/01.jpeg" /></a>
                </div>
                <div class="item swiper-slide">
                    <a class="headOfficeImg" data-gall="headOfficeGly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img class="img-fluid" src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                </div>
                <div class="item swiper-slide">
                    <a class="headOfficeImg" data-gall="headOfficeGly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img class="img-fluid" src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                </div>
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
                <div onmouseenter="slider('national-slide-1')" class="section-item scroll_item">
                    <h2>Chattogram <span>04/06/2019</span></h2>
                    <div id="national-slide-1" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="national1Img" data-gall="national1Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national1Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/galle2y/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national1Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('national-slide-2')" class="section-item scroll_item">
                    <h2>Chattogram <span>04/06/2019</span></h2>
                    <div id="national-slide-2" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="national1Img" data-gall="national2Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national2Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national2Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('national-slide-3')" class="section-item scroll_item">
                    <h2>Dhaka <span>04/06/2019</span></h2>
                    <div id="national-slide-3" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="national1Img" data-gall="national3Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national3Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national3Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('national-slide-4')" class="section-item scroll_item">
                    <h2>Barisal <span>04/06/2019</span></h2>
                    <div id="national-slide-4" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="national1Img" data-gall="national4Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national4Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="national1Img" data-gall="national4Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
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
                <div onmouseenter="slider('annual-slide-1')" class="section-item scroll_item">
                    <h2>2018</h2>
                    <div id="annual-slide-1" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="annual1Img" data-gall="annual1Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual1Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual1Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('annual-slide-2')" class="section-item scroll_item">
                    <h2>2019</h2>
                    <div id="annual-slide-2" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="annual1Img" data-gall="annual2Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual2Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual2Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('annual-slide-3')" class="section-item scroll_item">
                    <h2>2020</h2>
                    <div id="annual-slide-3" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="annual1Img" data-gall="annual3Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual3Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual3Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('annual-slide-4')" class="section-item scroll_item">
                    <h2>2021</h2>
                    <div id="annual-slide-4" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="annual1Img" data-gall="annual4Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual4Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual4Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('annual-slide-5')" class="section-item scroll_item">
                    <h2>2022</h2>
                    <div id="annual-slide-5" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="annual1Img" data-gall="annual5Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual5Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="annual1Img" data-gall="annual5Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
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
                <div onmouseenter="slider('ditf-slide-1')" class="section-item scroll_item">
                    <h2>2018</h2>
                    <div id="ditf-slide-1" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="ditf1Img" data-gall="ditf1Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf1Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf1Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('ditf-slide-2')" class="section-item scroll_item">
                    <h2>2019</h2>
                    <div id="ditf-slide-2" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="ditf1Img" data-gall="ditf2Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf2Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf2Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('ditf-slide-3')" class="section-item scroll_item">
                    <h2>2020</h2>
                    <div id="ditf-slide-3" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="ditf1Img" data-gall="ditf3Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf3Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf3Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('ditf-slide-4')" class="section-item scroll_item">
                    <h2>2021</h2>
                    <div id="ditf-slide-4" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="ditf1Img" data-gall="ditf4Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf4Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf4Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
                <div onmouseenter="slider('ditf-slide-5')" class="section-item scroll_item">
                    <h2>2022</h2>
                    <div id="ditf-slide-5" class="item slider">
                        <div class="slider_inner">
                            <div class="slide_item slide_item_active">
                                <a class="ditf1Img" data-gall="ditf5Gly" href="{{asset('assets/')}}/img/gallery/01.jpeg"><img src="{{asset('assets/')}}/img/gallery/01.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf5Gly" href="{{asset('assets/')}}/img/gallery/02.jpeg"><img src="{{asset('assets/')}}/img/gallery/02.jpeg" /></a>
                            </div>
                            <div class="slide_item">
                                <a class="ditf1Img" data-gall="ditf5Gly" href="{{asset('assets/')}}/img/gallery/03.jpeg"><img src="{{asset('assets/')}}/img/gallery/03.jpeg" /></a>
                            </div>
                        </div>
                        <div class="slider_pagination">
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                            <div class="pagination_icon"></div>
                        </div>
                    </div>
                </div>
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
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/megazine (1).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (2).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (3).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (4).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (5).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (6).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (7).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (8).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
                <div class="item swiper-slide">
                    <img class="img-fluid" src="{{asset('assets/')}}/img/magazine/magazine (9).jpeg" alt="">
                    <h2>MIRROR <span>May - 2022</span></h2>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- ==================== MAGAZINE SECTION END ==================== -->

@stop
@section('js')
@stop
