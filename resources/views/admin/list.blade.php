@extends('main')



@section('content')

    <h1>About me</h1>
    @if ($first == 'first')
        <p>FIRST</p>
    @else
        <p>{{$first}},{{$second}}</p>
    @endif

    @if(empty($nums))
        <li>null</li>
     @else
        @foreach($nums as $num)
          <li>{{$num}}</li>
        @endforeach
    @endif
@stop
