@extends('layouts.app')

@section('content')
    <div id="temp"></div>
    <div class="container mt-3">
        <div class="row justify-content-between">
            @foreach ($posts as $key => $post)
                <div class="p-3 {{ $key % 3 ? ' col-6' : ' col-12' }}">
                    <article id="article"
                        class="row d-flex align-items-center bg-white border border-1 border-light shadow p-3"
                        style="height: 200px">
                        {{ preg_match_all('/\((.*?)\)/', $post->description, $result) ? '' : '' }}
                        <textarea class="d-none md">{{ $post->description }}</textarea>
                        <a href="{{ route('article.show', Str::slug($post->title)) }}"
                            class="text-black text-decoration-none">
                            <h3>{{ $post->title }}</h3>
                        </a>
                        <img style="cursor: pointer"
                            onclick="window.location.href='{{ route('article.show', Str::slug($post->title)) }}'"
                            class="img-fluid col-2 lazyload{{ $key % 3 ? ' p-0' : '' }}"
                            src="{{ asset('images/spinner.gif') }}" data-src="{{ $result[1][0] }}"
                            alt="{{ Str::slug($post->title) }}">
                        <div class="content col-10"></div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection
