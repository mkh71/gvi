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
                @foreach( $data as $category)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <img src="{{asset('storage/'.$category->image)}}" alt="{{$category->name}}" class="img-fluid">
                        <a href="{{ $category->back_link }}" class="overly" target="_blank">
                            <div class="overflow">
                                <h3>{{$category->name}}</h3>
                                <p>Shop Now <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==================== PRODUCT SECTION END ==================== -->

@stop
@section('js')
@stop
