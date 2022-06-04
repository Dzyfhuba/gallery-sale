@extends('layouts.app')

@section('content')
    <div class="p-5 bg-light">
        <h1 class="display-3">Alam Rohman Garden</h1>
        <p class="lead">Kami menyedia layanan jasa pembuatan dan perawatan taman</p>
        <hr class="my-2">
    </div>
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-xl-10 mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <section class="services mb-5">
                            <a href="{{ route('service.index') }}" class="text-decoration-none text-dark">
                                <h1 class="title">Macam-macam jasa yang kami sediakan</h1>
                            </a>
                            <hr>
                            <div class="list-horizontal">
                                @foreach ($services as $service)
                                    <div class="card">
                                        <img class="card-img-top img-thumbnail lazyload card-img-400"
                                            src="{{ asset('images/spinner.gif') }}"
                                            data-src="{{ $service->images[0][0]->image }}" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card more p-3">
                                    <a href="{{ route('service.index') }}" class="btn-a">Lihat semua jasa</a>
                                </div>
                            </div>
                        </section>
                        <section class="articles">
                            <a href="{{ route('gallery.index') }}" class="text-decoration-none text-dark">
                                <h1 class="title">Artikel baru dari kami</h1>
                            </a>
                            <hr>
                            <div class="list-vertical">
                                <div id="temp"></div>
                                @foreach ($articles as $article)
                                    <div class="card mb-3">
                                        <div class="row g-0 justify-content-between">
                                            <div class="col-md-10">
                                                <div class="card-body">
                                                    <a href="{{ route('article.show', Str::slug($article->title)) }}"
                                                        class="text-decoration-none text-dark">
                                                        <h5 class="card-title">{{ $article->title }}</h5>
                                                    </a>
                                                    <textarea class="d-none md">{{ $article->description }}</textarea>
                                                    <div class="card-text content"></div>
                                                    <p class="card-text">
                                                        <small class="text-muted">
                                                            {{ $article->updated_at->diffForHumans() }}
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                {{ preg_match_all('/\((.*?)\)/', $article->description, $result) ? '' : '' }}
                                                <img src="{{ asset('images/spinner.gif') }}"
                                                    data-src="{{ $result[1][0] }}"
                                                    class="img-fluid img-thumbnail rounded-start lazyload" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card more p-1 h-auto">
                                    <a href="{{ route('article.index') }}" class="btn-a">Lihat semua artikel</a>
                                </div>
                            </div>
                        </section>
                        <section class="galleries">
                            <a href="{{ route('gallery.index') }}" class="text-decoration-none text-dark">
                                <h1 class="title">Galeri foto kami</h1>
                            </a>
                            <hr>
                            <div class="list-horizontal">
                                @foreach ($galleries as $gallery)
                                    <div class="card">
                                        <img class="card-img-top img-thumbnail lazyload card-img-400"
                                            src="{{ asset('images/spinner.gif') }}" data-src="{{ $gallery->image }}"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $gallery->title }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card more p-3">
                                    <a href="{{ route('gallery.index') }}" class="btn-a">Lihat semua galeri</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 mb-3">
                <aside class="contactus sticky-top card p-3">
                    <h1 class="title">Hubungi kami</h1>
                    <hr>
                    <article>
                        <h1><img src="{{ $contact->logo }}" alt="{{ $contact->title }}" class="w-100"></h1>
                        <p>{{ $contact->description }}</p>
                        <p>{{ $contact->complete_address }}</p>
                        <p><i class="bi bi-whatsapp"></i> {{ $contact->phone }}</p>
                        <p><i class="bi bi-envelope"></i> {{ $contact->email }}</p>
                        <p>
                            <i class="bi bi-facebook"></i>
                            <a href="{{ $contact->facebook_url }}"
                                class="text-decoration-none text-dark">{{ $contact->facebook }}</a>
                        </p>
                        <p>
                            <i class="bi bi-instagram"></i>
                            <a href="{{ $contact->instagram_url }}"
                                class="text-decoration-none text-dark">{{ $contact->instagram }}</a>
                        </p>
                        <article id=address>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="200" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=alam%20rohman%20garden&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://putlocker-is.org"></a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 200px;
                                            width: 100%
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: auto;
                                            a width: 100%;
                                        }

                                    </style>
                                </div>
                                <p class="d-none">
                                    {{ $contact->address }}
                                </p>
                        </article>
                    </article>
                </aside>
            </div>
        </div>
    </div>
@endsection
