@extends('main')

@section('content')
    <h1>Wirte a New Article</h1>

    <hr/>

    {!! Form::open(['url'=>'/articles']) !!}
       @include('articles._form',['submitButtonText'=>'Create Article'])
    {!! Form::close() !!}
    @include('errors.list')
@stop