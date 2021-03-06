@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Galeri</h1>
                <!-- Button trigger add gallery modal -->
                <div class="row" id="galleries">
                    @foreach ($galleries as $key => $gallery)
                        <div class="col-md col-md-4 col-lg-3">
                            <div class="card border-0 mb-3" id="gallery">
                                <img src="{{ asset('images/spinner.gif') }}" data-src="{{ $gallery->image }}"
                                    class="card-img-top lazyload card-img-400" alt="{{ $gallery->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gallery->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- {{ $galleries->links() }} --}}
            </div>
        </div>
    </div>
@endsection
