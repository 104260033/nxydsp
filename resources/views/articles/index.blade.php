@extends('main')

@section('content')
    <h1>Articles</h1>
    <hr/>

    @foreach($articles as $article)
        <article>
            <h2>{{ $article->title }}</h2>
            <div class="body">{{ $article->content }}</div>
            <div class="body">{{ $article->created_at }}</div>
        </article>
    @endforeach
@stop