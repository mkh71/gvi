@extends('backend.layouts.master')
@section('title', "Update Brand")
@section('top-title', "Update Brand")
@section('page-title', "Update Brand")
@section('panel-title', "Update Brand")
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            {{ Form::model($data, ['route'=>['brands.update', $data->id], 'method'=>'post', 'files'=> true]) }}
            @method('PATCH')
                <div class="col-lg-12 col-sm-12 {{$errors->has('type') ? 'has-error' : ''}}">
                    {{ Form::label('','Name : ',['class'=>'control-label'])}}
                    {{Form::select('type', ['Our Brands'=>"Our Brands", 'Online Partner'=>'Online Partner', 'Modern Trade'=>'Modern Trade'], old('type'), ['class'=>'form-control'])}}
                    @if ($errors->has('type'))
                        <span class="help-block">
                                     <strong>{{ $errors->first('type') }}</strong>
                                </span>
                    @endif
                    <br>
                </div>
                <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                    {{ Form::label('','Name : ',['class'=>'control-label'])}}
                    {{ Form::text('name', old('name'),['class'=>'form-control','placeholder'=>'Eg: Face Care'])}}
                    @if ($errors->has('name'))
                        <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <br>
                </div>

                <div class="col-lg-12 col-sm-12 {{$errors->has('back_link') ? 'has-error' : ''}}">
                    {{ Form::label('','Back Link : ',['class'=>'control-label'])}}
                    {{ Form::text('back_link', old('back_link'),['class'=>'form-control','placeholder'=>'Eg: https://www.xyz.com/category'])}}
                    @if ($errors->has('back_link'))
                        <span class="help-block">
                             <strong>{{ $errors->first('back_link') }}</strong>
                        </span>
                    @endif
                    <br>
                </div>

                <div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">
                    <div class="image" style="padding: 20px;"></div>
                </div>


                <div class="col-lg-12 col-sm-12 {{$errors->has('seo_keyword') ? 'has-error' : ''}}">
                    {{ Form::label('','SEO keyword (separated by comma): ',['class'=>'control-label'])}}
                    {{ Form::text('seo_keyword',old('seo_keyword'),['class'=>'form-control','placeholder'=>'kew word separated by comma'])}}
                    @if ($errors->has('seo_keyword'))
                        <span class="help-block">
                             <strong>{{ $errors->first('seo_keyword') }}</strong>
                        </span>
                    @endif
                    <br>
                </div>
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
                label: 'Cover Pic',
                imagesInputName: 'image',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
