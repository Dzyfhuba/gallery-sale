@extends('layouts.app')

@section('content')
    <div class="p-5 bg-light">
        <h1 class="display-3">Alam Rohman Garden</h1>
        <p class="lead">Kami menyedia layanan jasa pembuatan dan perawatan taman</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section class="services">
                    <h1 class="title">Jasa</h1>
                    <div class="list-horizontal">
                        @foreach ($services as $service)
                            <div class="card">
                                <img class="card-img-top" src="{{ $service->images[0][0]->image }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Text</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="card more">
                            <span>
                                {{-- <a href="{{ route('service.index') }}">Lihat semua jasa</a> --}}
                            </span>
                        </div>
                    </div>
                </section>
                <section class="articles">

                </section>
                <section class="galleries">

                </section>
                <aside class="contactus">

                </aside>
            </div>
        </div>
    </div>
@endsection
