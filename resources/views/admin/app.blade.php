<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('layouts.navbar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 bg-light sticky-md-top fixed-bottom">
                    <div class="d-flex flex-md-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                        <ul
                            class="nav nav-pills nav-flush flex-md-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                            <li class="nav-item">
                                <a href="{{ route('admin.article.index') }}" class="nav-link py-3 px-2" title=""
                                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Artikel">
                                    <i class="bi bi-file-earmark-text fs-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.gallery.index') }}" class="nav-link py-3 px-2" title=""
                                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Galeri">
                                    <i class="bi bi-images fs-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.service.index') }}" class="nav-link py-3 px-2" title=""
                                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Jasa">
                                    <span class="material-icons-outlined fs-1">
                                        work
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.contactus.index') }}" class="nav-link py-3 px-2" title=""
                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                    data-bs-original-title="Kontak Kami">
                                    <span class="material-icons-outlined fs-1">
                                        contacts
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-11 p-3">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
