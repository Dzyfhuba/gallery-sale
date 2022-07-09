@extends('layouts.app')
@section('title')
    {{ $article->title . ' | ' }}
@endsection
@section('content')
    <div class="container py-3">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"></h1>
                <div class="card-body" id="md_show"></div>
                <blockquote class="blockquote">Ditulis oleh: {{ $article->user->name }}</blockquote>
            </div>
        </div>
    </div>
    <textarea id="md" class="d-none">{{ $article->content }}</textarea>
    <style>
        .card-body p {
            font-size: medium;
        }
    </style>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $('.card-title').html($('title').html());
    </script>
@endsection
