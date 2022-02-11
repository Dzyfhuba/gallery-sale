@extends('layouts.app')
@section('title')
    {{ $post->title . ' | ' }}
@endsection
@section('content')
    <div class="container py-3">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"></h1>
                <blockquote class="blockquote mb-0">
                    <p>Quote</p>
                    <footer class="blockquote-footer">Footer<cite title="Source title">Source title</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $('.card-title').html($('title').html());
    </script>
@endsection
