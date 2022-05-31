@extends('backend.layouts.master')
@section('title','Home')
@section('css')

    <style>
        #area-chart,
        #line-chart,
        #bar-chart,
        #stacked,
        #pie-chart{
            min-height: 250px;
        }

        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
@stop
@section('page-title')Welcome back to the Dashboard.@stop
@section('content')
    <div class="row-flex">
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="card panel panel-primary panel-colorful pad-all">--}}
{{--                <div class="card-body row-flex align-items-center px-6 py-7">--}}
{{--                    <div class="col-5">--}}
{{--                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">--}}
{{--                         <i class="fa fa-user"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="col-7 text-center">--}}
{{--                        <p class="fs-42 lh-12 mb-0 counterUp" data-count="10">0</p>--}}
{{--                        <p>Doctors</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="card panel panel-warning panel-colorful pad-all">--}}
{{--                <div class="card-body row-flex align-items-center px-6 py-7">--}}
{{--                    <div class="col-5">--}}
{{--                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">--}}
{{--                         <i class="fa fa-ambulance"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="col-7 text-center">--}}
{{--                        <p class="fs-42 lh-12 mb-0 counterUp" data-count="10">0</p>--}}
{{--                        <p>Patients</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="card panel panel-primary panel-colorful pad-all">--}}
{{--                <div class="card-body row-flex align-items-center px-6 py-7">--}}
{{--                    <div class="col-5">--}}
{{--                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">--}}
{{--                         <i class="fa fa-check"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="col-7 text-center">--}}
{{--                        <p class="fs-42 lh-12 mb-0 counterUp" data-count="10">0</p>--}}
{{--                        <p>Appointment</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="card panel panel-warning panel-colorful pad-all">--}}
{{--                <div class="card-body row-flex align-items-center px-6 py-7">--}}
{{--                    <div class="col-4">--}}
{{--                            <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">--}}
{{--                             <i class="fa fa-folder"></i>--}}
{{--                            </span>--}}
{{--                    </div>--}}
{{--                    <div class="col-8 text-center">--}}
{{--                        <p class="fs-35 lh-10 mb-0 counterUp" data-count="10">0</p>--}}
{{--                        <p>Revenue</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
@section('js')
    <script>

    </script>
@endsection
