<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="GVI">
    <title>GVI Dashboard | @yield('title')</title>

    <link href="{{ url('/assets/favicon.png') }}" rel="icon">
    <!--Open Sans Font [ OPTIONAL ]-->

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-select/bootstrap-select.min.css')}}">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/nifty.min.css')}}" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <div class="row">
        @foreach($clinics as $clinic)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div>
                    <a href="{{route('homeSelection', $clinic->id)}}">
                        <div class="card panel panel-primary panel-colorful pad-all">
                            <div class="card-body row-flex align-items-center px-6 py-7">
                                <div class="col-5">
                        <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-white badge-circle">
                         <img src="{{ $clinic->logo ?? asset('admin/user/user.png')}}" class="image-fluid" height="100%" width="100%" style="border-radius: 100%">
                        </span>
                                </div>
                                <div class="col-7 text-center">
                                    <p>{{$clinic->name}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
        <div class="show-fixed pad-rgt pull-right">
            You have <a href="#" class="text-main"><span class="badge badge-danger">0</span>  action.</a>
        </div>
        <div class="hide-fixed pull-right pad-rgt">
            Developed By <strong>@GVI</strong>.
        </div>
        <strong class="pad-lft"><i>{{date('Y')}} &#0169; Copyright - </i><b> {{config()['app']['name']}}</b></strong>
    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>

{{-- JS Start --}}


<script src="{{url('admin/plugins/pace/pace.min.js')}}"></script>

<!--jQuery [ REQUIRED ]-->
<script src="{{url('admin/js/jquery.min.js')}}"></script>

<!--Notify Js for operation alert-->
<script src="{{url('admin/js/notify.min.js')}}"></script>



<script src="{{url('admin/js/bootstrap.min.js')}}"></script>


<script type="text/javascript" src="{{url('admin/js/select2.js')}}"></script>

<script src="{{url('admin/js/nifty.min.js')}}"></script>

<script src="{{url('admin/js/sweetalert.min.js')}}"></script>


<!--DataTable-->
<script src="{{url('admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables/js/dataTables.bootstrap.min.js')}}"></script>
