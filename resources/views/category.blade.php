@extends('layouts.main')
@section('title', 'Categories')
@section('content')

    <!-- ==================== PRODUCT SECTION ==================== -->
    <section class="product">
        <div class="container">
            <div class="section-title">
                <h4>PRODUCT CATEGORIES</h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('assets/')}}/img/category/Skin Care.jpg" alt="" class="img-fluid">
                        <a href="" class="overly">
                            <div class="overflow">
                                <h3>LIPS CARE</h3>
                                <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('assets/')}}/img/category/02.jpg" alt="" class="img-fluid">
                        <a href="" class="overly">
                            <div class="overflow">
                                <h3>SKIN CARE</h3>
                                <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('assets/')}}/img/category/Nail Care.jpg" alt="" class="img-fluid">
                        <a href="" class="overly">
                            <div class="overflow">
                                <h3>NAIL CARE</h3>
                                <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('assets/')}}/img/category/01.jpg" alt="" class="img-fluid">
                        <a href="" class="overly">
                            <h3>HAIR CARE</h3>
                            <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('assets/')}}/img/category/Food.jpg" alt="" class="img-fluid">
                        <a href="" class="overly">
                            <h3>FOOD ITEMS</h3>
                            <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('assets/')}}/img/category/Baby.png" alt="" class="img-fluid">
                        <a href="" class="overly">
                            <div class="overflow">
                                <h3>BABY CARE</h3>
                                <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== PRODUCT SECTION END ==================== -->

@stop
@section('js')
@stop
