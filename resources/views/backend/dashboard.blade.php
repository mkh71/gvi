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
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card panel panel-primary panel-colorful pad-all">
                <div class="card-body row-flex align-items-center px-6 py-7">
                    <div class="col-5">
                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">
                         <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="col-7 text-center">
                        <p class="fs-42 lh-12 mb-0 counterUp" data-count="10">0</p>
                        <p>Doctors</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card panel panel-warning panel-colorful pad-all">
                <div class="card-body row-flex align-items-center px-6 py-7">
                    <div class="col-5">
                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">
                         <i class="fa fa-ambulance"></i>
                        </span>
                    </div>
                    <div class="col-7 text-center">
                        <p class="fs-42 lh-12 mb-0 counterUp" data-count="10">0</p>
                        <p>Patients</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card panel panel-primary panel-colorful pad-all">
                <div class="card-body row-flex align-items-center px-6 py-7">
                    <div class="col-5">
                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">
                         <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <div class="col-7 text-center">
                        <p class="fs-42 lh-12 mb-0 counterUp" data-count="10">0</p>
                        <p>Appointment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="card panel panel-warning panel-colorful pad-all">
                <div class="card-body row-flex align-items-center px-6 py-7">
                    <div class="col-4">
                            <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">
                             <i class="fa fa-folder"></i>
                            </span>
                    </div>
                    <div class="col-8 text-center">
                        <p class="fs-35 lh-10 mb-0 counterUp" data-count="10">0</p>
                        <p>Revenue</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-6">
            <!-- Sales Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title text-center">Revenue</h4>
                </div>
                <div class="card-body">
                    <div id="morrisArea"></div>
                </div>
            </div>
            <!-- /Sales Chart -->

        </div>
        <div class="col-md-12 col-lg-6">
            <!-- Invoice Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title text-center">Status</h4>
                </div>
                <div class="card-body">
                    <div id="morrisLine"></div>
                </div>
            </div>
            <!-- /Invoice Chart -->

        </div>
    </div>

    <br>
    <div class="col-md-12 col-lg-6">
        <!-- Invoice Chart -->
        <div class="card card-chart">
            <div class="card-header">
                <h4 class="card-title text-center">Status</h4>
            </div>
            <div class="card-body">
                <canvas id="canvas" height="250"></canvas>
            </div>
        </div>
        <!-- /Invoice Chart -->
    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

    <script>
        $(document).ready(function () {
            var url = "{{url('api/vitalReport')}}";
            var Time = new Array();
            var Labels = new Array();
            var Systole = new Array();
            var Diastole = new Array();
            var HR = new Array();
            (function($){
                $.get(url, function(response){
                    // for (let i = 0; i < 23; i++){
                    //     Time.push(i);
                    //     Systole.push(Math.floor(Math.random() * (150 - 100 + 1)) + 100);
                    //     Diastole.push(Math.floor(Math.random() * (115 - 60 + 1)) + 60);
                    //     HR.push(Math.floor(Math.random() * (80 - 40 + 1)) + 40);
                    // };

                    response.forEach(function(data) {
                        Time.push(data.time);
                        Systole.push(data.systole);
                        Diastole.push(data.diastole);
                        HR.push(data.heart_rate);
                    });
                    var ctx = document.getElementById("canvas").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: Time,
                            datasets: [
                                {
                                    label: 'Systole',
                                    borderColor: '#0022aa',
                                    data: Systole,
                                    tension: 0,
                                    fill : '#fff',
                                    stepped : 'middle',
                                    point : 0

                                },
                                {
                                    label: 'Diastole',
                                    borderColor: 'rgba(4,94,0,0.97)',
                                    data: Diastole,
                                    tension: 0,
                                    fill : '#fff',
                                    point : 0
                                },
                                {
                                    label: 'HR',
                                    borderColor: 'rgb(142,0,0)',
                                    data: HR,
                                    fill : '#fff',
                                    point : 0
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Chart.js Line Chart'
                                },
                            },
                            interaction: {
                                mode: 'index',
                            },

                            scales: {
                                x: {
                                    display: true,
                                    title: {
                                        display: true,
                                        text: 'Month'
                                    }
                                },
                                y: {
                                    display: true,
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Value'
                                    }
                                }
                            }
                        },

                        // options: {
                        //     plugins: {
                        //         filler: {
                        //             propagate: false,
                        //         },
                        //         title: {
                        //             display: true,
                        //             text: (ctx) => 'drawTime: ' + ctx.chart.options.plugins.filler.drawTime
                        //         }
                        //     },
                        //     pointBackgroundColor: '#fff',
                        //     radius: 1,
                        //     interaction: {
                        //         intersect: false,
                        //     },
                        //     scales: {
                        //         x: {
                        //             title: {
                        //                 display: true,
                        //                 text: 'Time'
                        //             }
                        //         },
                        //         y: [{
                        //             title: {
                        //                 display: true,
                        //                 text: 'Value'
                        //             },
                        //             ticks: {
                        //                 beginAtZero:0
                        //             }
                        //         }]
                        //     }
                        // }
                    });
                });
            })(jQuery);
        });
        function getRandomColor() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
@endsection
