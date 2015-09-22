@extends('main')



@section('content')

    <h1>About me</h1>
    <p>{{$first}},{{$second}}</p>

@stop

@section('foot')
    <script>alert('Contact Create');</script>
@stop