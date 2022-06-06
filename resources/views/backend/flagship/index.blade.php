@extends('backend.layouts.master')
@section('title', "Flagship")
@section('top-title', "Flagship")
@section('page-title', "Flagship")
@section('panel-title', "Flagship")
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            {{ Form::open(['route'=>'flagships.store', 'method'=>'post', 'files'=> true]) }}
            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('name') ? 'has-error' : ''}}">
                {{ Form::label('','Flagship Name : ',['class'=>'control-label'])}}
                {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Eg: Face Care', 'required'=>'required'])}}
                @if ($errors->has('name'))
                    <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
                        </span>
                @endif
            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('address') ? 'has-error' : ''}}">
                {{ Form::label('','Address : ',['class'=>'control-label'])}}
                {{ Form::text('address',old('address'),['class'=>'form-control','placeholder'=>'Eg: Dhaka, Mirpur, 101'])}}
                @if ($errors->has('address'))
                    <span class="help-block">
                             <strong>{{ $errors->first('address') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('phone') ? 'has-error' : ''}}">
                {{ Form::label('','Phone : ',['class'=>'control-label'])}}
                {{ Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'Eg: 01xxxxxxxx'])}}
                @if ($errors->has('phone'))
                    <span class="help-block">
                             <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('email') ? 'has-error' : ''}}">
                {{ Form::label('','Email : ',['class'=>'control-label'])}}
                {{ Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'Eg: example@...mail.com'])}}
                @if ($errors->has('email'))
                    <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('back_link') ? 'has-error' : ''}}">
                {{ Form::label('','Back Link  (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('back_link',old('back_link'),['class'=>'form-control','placeholder'=>'Eg: https://www.xyz.com/gvi'])}}
                @if ($errors->has('back_link'))
                    <span class="help-block">
                             <strong>{{ $errors->first('back_link') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('fb') ? 'has-error' : ''}}">
                {{ Form::label('','Facebook Link (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('fb',old('fb'),['class'=>'form-control','placeholder'=>'Eg: https://www.facebook.com/gvi'])}}
                @if ($errors->has('fb'))
                    <span class="help-block">
                             <strong>{{ $errors->first('fb') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('ig') ? 'has-error' : ''}}">
                {{ Form::label('','Instagram Link : ',['class'=>'control-label'])}}
                {{ Form::text('ig',old('ig'),['class'=>'form-control','placeholder'=>'Eg: https://www.instagram.com/gvi'])}}
                @if ($errors->has('ig'))
                    <span class="help-block">
                             <strong>{{ $errors->first('ig') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('yt') ? 'has-error' : ''}}">
                {{ Form::label('','Youtube Link  (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('yt',old('yt'),['class'=>'form-control','placeholder'=>'Eg: https://www.youtube.com/gvi'])}}
                @if ($errors->has('yt'))
                    <span class="help-block">
                             <strong>{{ $errors->first('yt') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('tt') ? 'has-error' : ''}}">
                {{ Form::label('','Tiktok Link  (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('tt',old('tt'),['class'=>'form-control','placeholder'=>'Eg: https://www.tiktok.com/gvi'])}}
                @if ($errors->has('tt'))
                    <span class="help-block">
                             <strong>{{ $errors->first('tt') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('tw') ? 'has-error' : ''}}">
                {{ Form::label('','Twitter Link  (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('tw',old('tt'),['class'=>'form-control','placeholder'=>'Eg: https://www.twitter.com/gvi'])}}
                @if ($errors->has('tw'))
                    <span class="help-block">
                             <strong>{{ $errors->first('tw') }}</strong>
                        </span>
                @endif

            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('image') ? 'has-error' : ''}}">
                <div class="image" style="padding: 20px;"></div>
            </div>

            <div class="col-lg-6 col-sm-12">
                {{ Form::submit('Save Data',['class'=>'btn btn-primary btn-block']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-sm-12">
                <h1 class="btn-primary btn btn-block text-center text-uppercase"> View Flagship </h1>

            </div>
            <div class="col-sm-12">
                <table class="table table-responsive table-striped table-bordered datatable">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>Email</td>
                        <td>Image</td>
                        <td>Link</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $info)
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{$info->name }}</td>
                            <td>{{$info->address }}</td>
                            <td>{{$info->phone }}</td>
                            <td>{{$info->email }}</td>
                            <td><img src="{{asset('storage/'.$info->image)}}" class="img-fluid"
                                     style="max-height: 60px; max-width: 50px"></td>
                            <td>
                                BL: <a href="{{$info->back_link}}" target="_blank">{{$info->back_link}}</a><br>
                                FB: <a href="{{$info->fb}}" target="_blank">{{$info->fb}}</a><br>
                                IG: <a href="{{$info->ig}}" target="_blank">{{$info->ig}}</a><br>
                                YT: <a href="{{$info->yt}}" target="_blank">{{$info->yt}}</a><br>
                                TT: <a href="{{$info->tt}}" target="_blank">{{$info->tt}}</a><br>
                                TW: <a href="{{$info->tw}}" target="_blank">{{$info->tw}}</a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info edit" title="Edit"
                                   href="{{ route('flagships.edit',$info->id) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button class="btn btn-sm btn-danger erase"
                                        title="Delete"
                                        data-id="{{$info->id}}"
                                        data-url="{{ route('delete') }}"
                                        value="Flagship">
                                    <i class="demo-pli-trash"></i>
                                </button>
                            </td>
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
        $('.image').imageUploader({
                maxFiles: 1,
                label: 'Flagship Cover Pic',
                imagesInputName: 'image',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
