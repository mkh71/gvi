@extends('layouts.main')
@section('title', 'Flagship Outlets')
@section('content')
    <section class="offices-section">
        <div class="container">
            <div class="section-title">
                <h4>OUTLETS</h4>
            </div>
            <div class="row">
                @foreach($data as $info)
                <div class="col-md-4">
                    <div class="item">
                        <img src="{{asset('storage/'.$info->image)}}" alt="">
                        <div class="overly">
                            <h4>{{ $info->name }}</h4>
                            <p>{!! $info->address !!}</p>
                            <p>{{ $info->phone }}</p>
                            <p>{{ $info->email }}</p>
                            <ul class="d-flex justify-content-center">
                                <li><a class="social-icon" href="{{$info->fb}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="social-icon" href="{{$info->ig}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a class="social-icon" href="{{$info->yt}}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a class="social-icon" href="{{$info->tt}}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                <li><a class="social-icon" href="{{$info->wa}}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="social-icon" href="{{$info->location}}" target="_blank"><i class="fa-brands fa-street-view"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@section('js')
@stop
