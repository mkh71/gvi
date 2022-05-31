@extends('backend.layouts.master')
@section('title', "Categories")
@section('top-title', "Categories")
@section('page-title', "Categories")
@section('panel-title', "Categories")
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            {{ Form::open(['route'=>'categories.store', 'method'=>'post', 'files'=> true]) }}
                <div class="col-sm-12">
                    <h1 class="btn-primary btn btn-block text-center text-uppercase"> Add Category </h1>
                    <br>
                </div>
                <div class="col-lg-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}">
                    {{ Form::label('','Category Name : ',['class'=>'control-label'])}}
                    {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Eg: Face Care', 'required'=>'required'])}}
                    @if ($errors->has('name'))
                        <span class="help-block">
                             <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <br>
                </div>

                <div class="col-lg-12 col-sm-12 {{$errors->has('back_link') ? 'has-error' : ''}}">
                    {{ Form::label('','Back Link : ',['class'=>'control-label'])}}
                    {{ Form::text('back_link',old('back_link'),['class'=>'form-control','placeholder'=>'Eg: https://www.xyz.com/category'])}}
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

        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="col-sm-12">
                <h1 class="btn-primary btn btn-block text-center text-uppercase"> View Categories </h1>
                <br>
            </div>
            <div class="col-sm-12">
                <table class="table table-responsive table-striped table-bordered datatable">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>BackLink</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $info)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$info->name }}</td>
                        <td><img src="{{asset('storage/'.$info->image)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                        <td><a href="{{$info->back_link}}" target="_blank">{{$info->back_link}}</a></td>
                        <td>
                            <a class="btn btn-sm btn-info edit" title="Edit" href="{{ route('categories.edit',$info->id) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger erase"
                                    title="Delete"
                                    data-id="{{$info->id}}"
                                    data-url="{{ route('delete') }}"
                                    value="Category">
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
                label: 'Category Cover Pic',
                imagesInputName: 'image',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
