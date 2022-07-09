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
        .toastui-editor-popup-add-image .tab-item:first {
            display: none;
        }

    </style>
</head>

<body>
    {{-- Navbar --}}
    <form action="{{ route('admin.service.store') }}" method="post" id="serviceForm">
        @csrf
        <nav class="navbar navbar-expand-lg navbar-light bg-b-light">
            <div class="container-fluid">
                <a class="navbar-brand btn btn-warning" href="{{ url()->previous() }}">
                    <i class="bi bi-arrow-left-circle"></i> Back
                </a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <input type="text" class="form-control navbar" name="title" id="title" placeholder="Judul Jasa"
                            required>
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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#addImageModal">
                        <i class="bi bi-plus"></i> Tambah Gambar
                    </button>
                    <div class="selected-image mb-3 d-flex" style="overflow-x: scroll">
                        <div>Klik gambar untuk menghapusnya dari daftar</div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header bg-light">
                                    <h5 class="modal-title" id="addImageModalLabel">Tambah Gambar</h5>
                                    <button type="button" class="btn btn-primary mx-auto" id="save">Save
                                        changes</button>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4>Pilih gambar</h4>
                                    <article>
                                        <!-- get image list from $images -->
                                        <div class="form-check">
                                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                                @foreach ($images as $image)
                                                    <div class="col">
                                                        <div class="card image-item">
                                                            <img src="{{ asset('images/gallery/' . $image->image) }}"
                                                                class="card-img-top" alt="...">
                                                            <div
                                                                class="card-body position-absolute w-100 h-100 d-flex justify-content-center">
                                                                <h5 class="card-title align-self-end text-light">
                                                                    Card title
                                                                </h5>
                                                            </div>
                                                            <input type="checkbox" name="images[]" id="images"
                                                                value="{{ asset('images/gallery/' . $image->image) }}"
                                                                class="position-absolute top-0 m-2" style="right: 0">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end create modal -->
                    <textarea name="description" id="description" class="d-none"></textarea>
                    <div id="area" class="bg-light"></div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
