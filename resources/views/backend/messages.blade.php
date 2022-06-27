@extends('backend.layouts.master')
@section('title','Messages')
@section('page-title') Messages @stop
@section('panel-title') Messages @stop
@section('content')
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <h5 class="bg-transparent">Messages</h5>
        <table class="table table-bordered table-striped" id="dataTable">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            @php $i=0; @endphp
            @foreach($messages as $info)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$info->name}}</td>
                    <td><a href="mailto:{{$info->email}}">{{$info->email}}</a> </td>
                    <td>
                        {!! $info->message !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('js')
    <script>
        $(function(){
            $('#dataTable').DataTable();
        });
    </script>
@stop
