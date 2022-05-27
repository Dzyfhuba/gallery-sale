@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row justify-content-evenly px-3">
            @foreach ($services as $service)
                <div class="card col-lg-3 col-md-4 mb-3 mx-3">
                    <img class="card-img-top img-thumbnail mt-3 lazyload card-img-400"
                        src="{{ asset('images/spinner.gif') }}" data-src="{{ $service->images[0][0]->image }}"
                        alt="{{ $service->title }}">
                    <div class="card-body d-flex align-items-center">
                        <h4 class="card-title text-center">{{ $service->title }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
