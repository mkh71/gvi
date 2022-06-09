@extends('backend.layouts.master')
@section('title', "Update Categories")
@section('top-title', "Update Categories")
@section('page-title', "Update Categories")
@section('panel-title', "Update Categories")
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            {{ Form::model($data, ['route'=>['flagships.update', $data->id], 'method'=>'post', 'files'=> true]) }}
            @method('PATCH')
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

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('wa') ? 'has-error' : ''}}">
                {{ Form::label('','Whatsapp  (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('wa',old('wa'),['class'=>'form-control','placeholder'=>'Eg: https://www.whatsapp.com/gvi'])}}
                @if ($errors->has('wa'))
                    <span class="help-block">
                         <strong>{{ $errors->first('wa') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-lg-6 col-sm-12  form-group{{$errors->has('location') ? 'has-error' : ''}}">
                {{ Form::label('','Whatsapp  (with https://): ',['class'=>'control-label'])}}
                {{ Form::text('location',old('location'),['class'=>'form-control','placeholder'=>'Eg: https://www.map.google.com/dhaka+mirpur+'])}}
                @if ($errors->has('location'))
                    <span class="help-block">
                         <strong>{{ $errors->first('location') }}</strong>
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
@endsection
@section('js')
    <script>
        $('.image').imageUploader({
                preloaded: [
                    {id: 1, src: '{{asset('storage/'.$data['image'])}}'},
                ],
                maxFiles: 1,
                label: 'Flagship Cover Pic',
                imagesInputName: 'image',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
