<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .toastui-editor-popup-add-image .tab-item:fi {
            display: none;
        }

    </style>
</head>

<body>
    {{-- Navbar --}}
    <form action="{{ route('admin.article.store') }}" method="post" id="article-form">
        @csrf
        <nav class="navbar navbar-expand-lg navbar-light bg-b-light">
            <div class="container-fluid">
                <a class="navbar-brand btn btn-warning" href="{{ url()->previous() }}">
                    <i class="bi bi-arrow-left-circle"></i> Back
                </a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <input type="text" class="form-control navbar" name="title" id="title"
                            placeholder="Judul Artikel" required>
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{-- {{ $errors-> }} --}}
                            </div>
                        @endif
                    </li>
                    <li class="nav-item">
                        <select class="form-control" name="status" id="status">
                            <option value="0">Aktif</option>
                            <option value="1">Tidak Aktif</option>
                        </select>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Content --}}
        <div class="container-fluid pt-2">
            <div class="card">
                <div class="card-body">
                    <textarea name="description" id="description" class="d-none"></textarea>
                    <div id="area" class="bg-light"></div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
