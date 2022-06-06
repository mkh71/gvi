@extends('layouts.main')
@section('title', 'About-Us')
@section('content')
    <!-- ==================== BANNER SECTION ==================== -->
    <section class="container">
        <div class="container-banner">
            <img src="{{asset('storage/'.$data->about)}}" alt="" class="img-fluid">
        </div>
    </section>
    <!-- ==================== BANNER SECTION END ==================== -->

    <!-- ==================== ABOUT SECTION ==================== -->
    <section class="about-section">
        <div class="container">
            <div class="about-img"><img src="{{asset('storage/'.company()->logo)}}" alt=""></div>
            <p>{!! company()->about !!}</p>
        </div>
    </section>
    <!-- ==================== ABOUT SECTION END ==================== -->

    <!-- ==================== MESSAGE SECTION ==================== -->
    <section class="container">
        <div class="message-section">
            <h6>"CHAIRMAN'S MESSAGE"</h6>
            <p>Motivating and empowering thousands of women and men with confidence and trust in themselves and with others for many years to come.<br>
                Advocating beauty has been our only vocation for over 22 years. We aim at educating and supporting thousands of women and men, to feel good about themselves and aspire them to
                reach the persona they want to be.</p>
        </div>
        </div>
    </section>
    <!-- ==================== MESSAGE SECTION END ==================== -->

    <!-- ==================== HISTORY SECTION ==================== -->
    <section class="history">
        <div class="container">
            <div class="section-title">
                <h4>OUR HISTORY</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span>1999</span>
                        <img src="{{asset('assets/')}}/img/arrow.png" alt="">
                        <div class="text">
                            <h4>Beginning of a dream</h4>
                            <p>We started our organization from a very core level with all our love and passion to reach our dream.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span>2008</span>
                        <img src="{{asset('assets/')}}/img/arrow.png" alt="">
                        <div class="text">
                            <h4>Revolution</h4>
                            <p>We entered full fledged with a variety of new brands and with a bigger market in our eyesight.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span>2012</span>
                        <img src="{{asset('assets/')}}/img/arrow.png" alt="">
                        <div class="text">
                            <h4>The Era of Change</h4>
                            <p>The employee number crossed 150 and we initiated diversification in our approach to development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span>2015-18</span>
                        <img src="{{asset('assets/')}}/img/arrow.png" alt="">
                        <div class="text">
                            <h4>Awards & Reward</h4>
                            <p>We kept on growing and performing better with everyday and earned a few rewards for being the best sellers in the Southeast Asia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span>2020-21</span>
                        <img src="{{asset('assets/')}}/img/arrow.png" alt="">
                        <div class="text">
                            <h4>Pandemic</h4>
                            <p>We are surviving in this period, company still growing in this situation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== HISTORY SECTION END ==================== -->

    <!-- ==================== MV SECTION ==================== -->
    <section class="mv-section">
        <div class="container">
            <div class="section-title">
                <h4>MISSION & VISION</h4>
            </div>
            <div class="mv-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <h4> <span>Our</span><br>Vision</h4>
                            <p>Best quality products of international standard in most affordable prices.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <h4> <span>The</span><br>Mission</h4>
                            <p>Serving the nation with genuine and high quality products from around the world at their door steps.​</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== MV SECTION END ==================== -->

    <!-- ==================== INNOVATION SECTION ==================== -->
    <section class="innovation">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                        <h4>Innovation</h4>
                        <p>We tend to be the trend setter in our market by implementing innovative ways of serving the market and innovating new markets to become the market leader of
                            our trade.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon"><i class="fa-solid fa-heart"></i></div>
                        <h4>Satisfaction</h4>
                        <p>We regularly take feedback from our precious customers and try to improve as we understand customer demand and agree that Customer Satisfaction is the key to
                            success.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon"><i class="fa-solid fa-earth-asia"></i></div>
                        <h4>Uniqueness</h4>
                        <p>We bring in the most up to date products to keep up with the trend to stay one stay ahead of all our competitors: and we keep our employees the same way. More
                            updated more connected to the management and to the customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== INNOVATION SECTION END ==================== -->

    <!-- ==================== TRAINING SECTION ==================== -->
    <section class="training">
        <div class="container">
            <div class="item">
                <a href="" class="inner">
                    <img src="{{asset('storage/'.$data->sales)}}" alt="">
                    <h4>SALES TRAINING</h4>
                </a>
            </div>
            <div class="item">
                <a href="" class="inner">
                    <img src="{{asset('storage/'.$data->beauty)}}" alt="">
                    <h4>SALES TRAINING</h4>
                </a>
            </div>
        </div>
    </section>
    <!-- ==================== TRAINING SECTION END ==================== -->
@stop
@section('js')
@stop
