@extends('backend.layouts.master')
@section('title', "Update Gallery")
@section('top-title', "Update Gallery")
@section('page-title', "Update Gallery")
@section('panel-title', "Update Gallery")
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            {{ Form::model($data, ['route'=>['sliders.update', $data->id], 'method'=>'post', 'files'=> true]) }}
            @method('PATCH')
            <div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">
                <div class="image" style="padding: 20px;"></div>
            </div>

            <div class="col-lg-12 col-sm-12 {{$errors->has('year') ? 'has-error' : ''}}">
                {{ Form::label('','Year: ',['class'=>'control-label'])}}
                {{ Form::selectRange('year', 2015, 2050, old('year'),['class'=>'form-control','placeholder'=>'Eg: 2020'])}}
                @if ($errors->has('year'))
                    <span class="help-block">
                         <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
                <br>
            </div>


            <div class="col-lg-12 col-sm-12 {{$errors->has('title') ? 'has-error' : ''}}">
                {{ Form::label('','Title: ',['class'=>'control-label'])}}
                {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Eg: Mirror'])}}
                @if ($errors->has('title'))
                    <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                        </span>
                @endif
                <br>
            </div>

            @if($data->type == 'National Training')
            <div class="col-lg-12 col-sm-12 {{$errors->has('group_location') ? 'has-error' : ''}}">
                {{ Form::label('','Location: ',['class'=>'control-label'])}}
                {{ Form::text('group_location',old('group_location'),['class'=>'form-control','placeholder'=>'Eg: Dhaka'])}}
                @if ($errors->has('group_location'))
                    <span class="help-block">
                             <strong>{{ $errors->first('group_location') }}</strong>
                        </span>
                @endif
                <br>
            </div>

            <div class="col-lg-12 col-sm-12 {{$errors->has('group_date') ? 'has-error' : ''}}">
                {{ Form::label('','Date: ',['class'=>'control-label'])}}
                {{ Form::date('group_date',old('group_date'),['class'=>'form-control','placeholder'=>'Eg: 2022/01/01'])}}
                @if ($errors->has('group_date'))
                    <span class="help-block">
                             <strong>{{ $errors->first('group_date') }}</strong>
                        </span>
                @endif
                <br>
            </div>
            @endif

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    {{ Form::submit('Save Data',['class'=>'btn btn-primary btn-block']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.image').imageUploader({
                preloaded: [
                    {id: 1, src:'{{asset('storage/'.$data['image'])}}'},
                ],
                maxFiles: 1,
                label: 'Slider',
                imagesInputName: 'image',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
