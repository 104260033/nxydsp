@extends('main')

@section('content')
    <h1>{{ $article->title }}</h1>
    <article>{{ $article->content }}</article>
    {{ url('/articles',$article->id) }}
    {{ action('ArticlesController@show',[$article->id]) }}
    'articles/{{$article->id}}'

@stop