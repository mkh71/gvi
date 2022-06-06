@extends('layouts.main')
@section('title', 'Our Brands')
@section('content')

    <!-- ==================== BRAND SECTION ==================== -->
    <div class="brand-section">
        <div class="section-title">
            <h4>OUR BRANDS</h4>
        </div>
        <div class="container">
            <div class="row">
                @foreach($data->where('type', 'Our Brands') as $brand)
                <div class="col-md-3 col-6">
                    <a href="{{$brand->back_link}}" class="item" target="_blank">
                        <img src="{{asset('storage/'.$brand->image)}}" alt="" class="img-fluid">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ==================== BRAND SECTION END ==================== -->

    <!-- ==================== TRADE SECTION ==================== -->
    <div class="brand-section">
        <div class="section-title">
            <h4>OUR MODERN TRADE PARTNERS</h4>
        </div>
        <div class="container">
            <div class="row">
                @foreach($data->where('type', 'Modern Trade') as $brand)
                    <div class="col-md-2 col-4">
                        <a href="{{$brand->back_link}}" class="item" target="_blank">
                            <img src="{{asset('storage/'.$brand->image)}}" alt="" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ==================== TRADE SECTION END ==================== -->

    <!-- ==================== ONLINE SECTION ==================== -->
    <div class="brand-section">
        <div class="section-title">
            <h4>OUR ONLINE PARTNERS</h4>
        </div>
        <div class="container">
            <div class="row">
                @foreach($data->where('type', 'Online Partner') as $brand)
                    <div class="col-md-2 col-4">
                        <a href="{{$brand->back_link}}" class="item" target="_blank">
                            <img src="{{asset('storage/'.$brand->image)}}" alt="" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ==================== ONLINE SECTION END ==================== -->

@stop
@section('js')
@stop
