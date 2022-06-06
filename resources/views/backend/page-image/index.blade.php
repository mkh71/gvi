@extends('backend.layouts.master')
@section('title', "Images")
@section('top-title', "Images")
@section('page-title', "Images")
@section('panel-title', "Images")
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {{ Form::open(['route'=>'images.store', 'method'=>'post', 'files'=> true]) }}
                <div class="col-sm-12">
                    <h1 class="btn-primary btn btn-block text-center text-uppercase"> Add Page Images </h1>
                    <br>
                </div>

                <div class="col-lg-12 col-sm-12 form-group">
                    <div class="home" style="padding: 20px;"><label class="label-control">Home Pic (Beside About)</label></div>
                </div>

                <div class="col-lg-12 col-sm-12 form-group">

                    <div class="contact" style="padding: 20px;"><label class="label-control">Contact Cover Pic</label></div>
                </div>

                <div class="col-lg-12 col-sm-12 form-group">
                    <div class="about" style="padding: 20px;"><label class="label-control">About Cover Pic</label></div>
                </div>

                <div class="col-lg-12 col-sm-12 form-group">
                    <div class="sales"><label class="label-control">Sales Training Cover Pic</label></div>
                </div>

                <div class="col-lg-12 col-sm-12 form-group">
                    <div class="beauty" style="padding: 20px; width: 100%; height: 100%"><label class="label-control">Beauty Training  Cover Pic</label></div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        {{ Form::submit('Save Data',['class'=>'btn btn-primary btn-block']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>

        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="col-sm-12">
                <h1 class="btn-primary btn btn-block text-center text-uppercase"> View Images </h1>
                <br>
            </div>
            <div class="col-sm-12">
                <table class="table table-responsive table-striped table-bordered">
                    <tbody>
                    @foreach($data as $info)
                    <tr>
                        <th>Home</th>
                        <td><img src="{{asset('storage/'.$info->home)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td><img src="{{asset('storage/'.$info->contact)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                    </tr>
                    <tr>
                        <th>About</th>
                        <td><img src="{{asset('storage/'.$info->about)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                    </tr>
                    <tr>
                        <th>Sales Training</th>
                        <td><img src="{{asset('storage/'.$info->sales)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                    </tr>
                    <tr>
                        <th>Beauty Training</th>
                        <td><img src="{{asset('storage/'.$info->beauty)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.home').imageUploader({
                maxFiles: 1,
                label: 'Home Pic (Beside About)',
                imagesInputName: 'home',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
        $('.contact').imageUploader({
                maxFiles: 1,
                label: 'Contact Cover Pic',
                imagesInputName: 'contact',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
        $('.about').imageUploader({
                maxFiles: 1,
                label: 'About Cover Pic',
                imagesInputName: 'about',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
        $('.sales').imageUploader({
                maxFiles: 1,
                label: 'Sales Training Cover Pic',
                imagesInputName: 'sales',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
        $('.beauty').imageUploader({
                maxFiles: 1,
                label: 'Beauty Training Cover Pic',
                imagesInputName: 'beauty',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
