@extends('layouts.app')

@section('content')
    <div id="temp"></div>
    <div class="container">
        @foreach ($posts as $post)
            <article id="article">
                {{ preg_match_all('/\((.*?)\)/', $post->description, $result) ? '' : '' }}
                <textarea class="d-none md">{{ $post->description }}</textarea>
                <h3><a href="{{ route('article.show', Str::slug($post->title)) }}">{{ $post->title }}</a></h3>
                <img style="cursor: pointer"
                    onclick="window.location.href='{{ route('article.show', Str::slug($post->title)) }}'"
                    class="img-thumbnail" src="{{ $result[1][0] }}" alt="{{ Str::slug($post->title) }}" srcset="">
                <div class="content"></div>
                <hr>
            </article>
        @endforeach
    </div>
@endsection
