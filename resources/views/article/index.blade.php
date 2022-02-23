@extends('admin.app')

@section('content')
    <div id="temp"></div>
    @foreach ($posts as $post)
        <article id="article">
            {{ preg_match_all('/\((.*?)\)/', $post->description, $result) ? '' : '' }}
            <textarea class="d-none md">{{ $post->description }}</textarea>
            <h3><a href="{{ route('article.show', Str::slug($post->title)) }}">{{ $post->title }}</a></h3>
            <img class="img-thumbnail" src="{{ $result[1][0] }}" alt="" srcset="">
            <div class="content"></div>
            <hr>
        </article>
    @endforeach
@endsection
