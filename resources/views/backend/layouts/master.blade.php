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

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('admin/css/nifty.min.css')}}" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="{{asset('admin/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <!-- Select 2 js Start  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.css') }}">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('admin/css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    <!--Sweet Alert-->
    <link rel="stylesheet" href="{{asset('admin/css/sweetalert.css')}}">

    {{-- Animate Css --}}
    <link rel="stylesheet" href="{{ asset('admin/plugins/animate-css/animate.min.css') }}">

    <!--Summernote [ OPTIONAL ]-->
    <link href="{{ asset('admin/plugins/summernote/summernote.min.css') }}" rel="stylesheet">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!--Pace - Page Load Progress bar [OPTIONAL]-->
    <link href="{{asset('admin/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/plugins/imageUploader/image-uploader.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('css/layout.css') }}">
    <!-- additional calender themes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .select2{
            display: table-cell !important;
            height: auto;
            width: 100%;
        }
        checkbox{
            width: 20px;
            cursor:pointer
        }
        .form-control{
            height: 40px;
            font-size: 16px;
            padding: 10px;
            margin-bottom: 5px;
        }
        a.menu-item i.fa{
            color: #0d2b77;
        }
        .d-none{
            display: none;
        }
        @yield('style')
    </style>
    @yield('css')
    {{-- CSS END --}}



    <!--jQuery [ REQUIRED ]-->
    <script src="{{url('admin/js/jquery.min.js')}}"></script>
    <script src="{{url('admin/plugins/pace/pace.min.js')}}"></script>
    <script src="{{url('admin/js/nifty.min.js')}}"></script>
    <!--Notify Js for operation alert-->
    <script src="{{url('admin/js/notify.min.js')}}"></script>
    <script src="{{url('admin/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/js/select2.js')}}"></script>
    <script src="{{url('admin/js/sweetalert.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('scripts')
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">
            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="{{route('home')}}" class="navbar-brand">
                    {{--<img src="{{url('public/admin/img/nifty-logo.png')}}" alt="Nifty Logo" class="brand-icon">--}}
                    <div class="brand-title">
                        <span class="brand-text">GVI <span class="text-warning text-bold"> Home</span> </span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->
            <!--================================-->
            <div class="navbar-content">
                <ul class="nav navbar-top-links">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="demo-pli-list-view"></i>
                        </a>
                    </li>

                    <!--End Navigation toogle button-->

                    <!--Search-->

                    {{--                    <li>--}}
                    {{--                        <div class="custom-search-form">--}}
                    {{--                            <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">--}}
                    {{--                                <i class="demo-pli-magnifi-glass"></i>--}}
                    {{--                            </label>--}}
                    {{--                            <form>--}}
                    {{--                                <div class="search-container collapse" id="nav-searchbox">--}}
                    {{--                                    <input id="search-input" type="text" class="form-control" placeholder="Type for search...">--}}
                    {{--                                </div>--}}
                    {{--                            </form>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                </ul>
                <ul class="nav navbar-top-links">
                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    {{--                    <li id="dropdown-user" class="dropdown">--}}
                    {{--                        <a href="#" class="dropdown-toggle text-heading fs-20 font-weight-500 lh-1" data-toggle="dropdown" aria-expanded="false">--}}
                    {{--                            <i class="far fa-bell">--}}
                    {{--                                <sup class="font-weight-bold fs-12 text-warning">{{count(notifications())}}</sup>--}}
                    {{--                            </i>--}}
                    {{--                        </a>--}}
                    {{--                        <div class="dropdown-menu dropdown-menu-right panel-default">--}}
                    {{--                            <ul class="head-list">--}}
                    {{--                                <li>--}}
                    {{--                                    <a class="btn btn-outline-primary" onclick="allRead();">--}}
                    {{--                                        <i class="fa fa-envelope-open icon-lg icon-fw"></i> Mark all as read--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                                @forelse(notifications() as $notify)--}}
                    {{--                                    <li>--}}
                    {{--                                        <a href="{{json_decode($notify->data)->route}}">--}}
                    {{--                                            <i class="fa fa-bell-on icon-lg icon-fw"></i> {{json_decode($notify->data)->title}}--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                @empty--}}
                    {{--                                    <li>--}}
                    {{--                                        <a href="#">--}}
                    {{--                                            <i class="fa fa-bell-school-slash  icon-lg icon-fw"></i> No Data--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                @endforelse--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <i class="demo-pli-male"><sup class="font-weight-bold fs-12 text-warning"></sup></i>
                                </span>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--You can also display a user name in the navbar.-->
                            <div class="username hidden-xs">{{Auth::user()->name ?? 'ADMIN'}}</div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        </a>

                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                            <ul class="head-list">
                                <li>
                                    <a href="{{route('profile', 0)}}"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                </li>

                                <li>
                                    <a href="{{route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logoutForm').submit();">
                                        <i class="demo-pli-unlock icon-lg icon-fw"></i> Log Out</a>
                                    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->
                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    @include('backend.layouts.side-menu')

    {{--Alert--}}
    <div class="js-alert">
        @if (session()->has('success'))
            <script type="text/javascript">
                $(function () {
                    $.notify("{{session()->get("success")}}", {globalPosition: 'bottom right',className: 'success'});
                });
            </script>
        @endif

        @if(session()->has('error'))
            <script type="text/javascript">
                $(function () {
                    $.notify("{{session()->get("error")}}", {globalPosition: 'bottom right', className: 'error'});
                });
            </script>
        @endif

        @if (session()->has('warning'))
            <script type="text/javascript">
                $(function () {
                    $.notify("{{session()->get("warning")}}", {globalPosition: 'bottom right', className: 'warn'});
                });
            </script>
        @endif
    </div>


    <div class="boxed">
        <div id="content-container">
            <div id="page-head">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="demo-pli-home"></i></a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">
                            @yield('page-title')
                        </li>
                    </ol>
                    {{--                    <div class="navbar navbar-collapse" role="navigation">--}}
                    {{--                        <div class="collapsed navbar-collapse panel-menu">--}}
                    {{--                            <ul class="nav navbar-nav pull-right page-menu">--}}
                    {{--                                @yield('page-menu')--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div id="page-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title col-lg-6 col-sm-6 text-bold" id="myDIV">
                                    @yield('panel-title')
                                </h4>
                                <h4 class="pull-right text-right panel-title col-lg-6 col-sm-6" style="color: #fff !important;">
                                    @yield('right-title')
                                </h4>
                            </div>

                            <div class="panel-body" style="min-height: 350px">
                                {{--Mid/main content--}}
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                @yield('panel-card')
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
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
<script src="{{ asset('admin/plugins/summernote/summernote.min.js') }}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{ asset('admin/plugins/imageUploader/image-uploader.min.js') }}"></script>
<script src="{{ url('/admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<!--JAVASCRIPT-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('.summernote').summernote();
        $(".datatable").DataTable();

        $('.datepicker').datepicker({autoclose:true});
        $('.alert').fadeOut(5000);
        $(".select2").select2();
    });
    /** CHECK EVERY ACTION DELETE CONFIRMATION BY SWEET ALERT **/
    $(document).on('click', '.erase', function () {
        var id = $(this).attr('data-id');
        var url=$(this).attr('data-url');
        var model= $(this).val();
        var status= $(this).attr('data-status');
        console.log("Clicked ID : "+id+ " Request URL : "+url+" Modal:"+model);
        var token = '{{csrf_token()}}';
        var $tr = $(this).closest('tr');
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this information!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: "No, cancel plz!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: url,
                        type: "post",
                        data: {id: id, model:model, status:status, _token: token},
                        dateType:'html',
                        success: function (response) {
                            swal("Deleted!", "Data has been Deleted.", "success"),
                                swal({
                                        title: "Deleted!",
                                        text: "Data has been Deleted.",
                                        type: "success"
                                    },
                                    function (isConfirm) {
                                        if (isConfirm) {
                                            $tr.find('td').fadeOut(1000, function () {
                                                $tr.remove();
                                            });
                                        }
                                    });
                        }
                    });
                } else {
                    swal("Cancelled", "Your data is safe :)", "error");
                }
            });
    });

    $(function() {
        $('.toggle-class').change(function() {
            let status = $(this).prop('checked') == true ? 1 : 0;
            let id = $(this).data('id');
            let url=$(this).attr('data-url');
            let column=$(this).attr('data-column');
            let token = '{{csrf_token()}}';
            let model= $(this).val();
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {status: status, id: id, model:model, column:column, _token: token},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    $('.counterUp').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({ countNum: $this.text()}).animate({
                countNum: countTo
            },
            {
                duration: 1000,
                easing:'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }
            });
    });

</script>
@yield('js')
{{--    @include('layouts.includes.svg')--}}
</body>
</html>
