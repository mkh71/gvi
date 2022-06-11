@extends('backend.layouts.master')
@section('title', "Gallery")
@section('top-title', "Gallery")
@section('page-title', "Gallery")
@section('panel-title', "Gallery")
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            {{ Form::open(['route'=>'galleries.store', 'method'=>'post', 'files'=> true]) }}
                <div class="col-sm-12">
                    <h1 class="btn-primary btn btn-block text-center text-uppercase"> Add Gallery ({{$type}}) </h1>
                    <br>
                </div>
                <input type="hidden" name="type" value="{{$type}}">

                <div class="col-lg-12 col-sm-12 {{$errors->has('image') ? 'has-error' : ''}}">
                    <div class="image" style="padding: 20px;"></div>
                </div>

                <div class="col-lg-12 col-sm-12 {{$errors->has('year') ? 'has-error' : ''}}">
                    {{ Form::label('','Year: ',['class'=>'control-label'])}}
                    {{ Form::selectRange('year', 1990, 2050, old('year'),['class'=>'form-control','placeholder'=>'Eg: 2020'])}}
                    @if ($errors->has('year'))
                        <span class="help-block">
                             <strong>{{ $errors->first('year') }}</strong>
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

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="col-sm-12">
                <h1 class="btn-primary btn btn-block text-center text-uppercase"> View Gallery </h1>
                <br>
            </div>
            <div class="col-sm-12">
                <table class="table table-responsive table-striped table-bordered ">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Image</td>
                        <td>Year</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $info)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td><img src="{{asset('storage/'.$info->image)}}" class="img-fluid" style="max-height: 60px; max-width: 50px"></td>
                        <td>{{$info->year }}</td>
                        <td>
{{--                            <a class="btn btn-sm btn-info edit" title="Edit" href="{{ route('galleries.edit',$info->id) }}">--}}
{{--                                <i class="fa fa-pencil"></i>--}}
{{--                            </a>--}}
                            <button class="btn btn-sm btn-danger erase"
                                    title="Delete"
                                    data-id="{{$info->id}}"
                                    data-url="{{ route('delete') }}"
                                    value="Gallery">
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
                maxFiles: 20,
                label: 'Gallery Image',
                imagesInputName: 'image',
                extensions: ['.jpg', '.JPG', '.jpeg', '.JPEG', '.png', '.PNG', '.svg', '.SVG', '.gif', '.GIF'],
            }
        );
    </script>
@stop
