@extends('admin.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Galeri</h1>
                <!-- Button trigger add gallery modal -->
                <button type="button" class="btn btn-success w-100 mb-3" data-bs-toggle="modal" data-bs-target="#addGallery">
                    Tambah Galeri
                </button>
                <!-- Modal -->
                <div class="modal fade" id="addGallery" tabindex="-1" aria-labelledby="addGallery" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addGallery">Tambah Galeri</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Judul Gambar</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            aria-describedby="title" placeholder="Judul Gambar..." autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi Gambar</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            aria-describedby="description" placeholder="Deskripsi Gambar..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <input type="file" class="form-control" name="image" id="image"
                                            aria-describedby="image" placeholder="Gambar..." required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row" id="galleries">
                    {{-- @foreach ($galleries as $key => $gallery)
                        <div class="col-md col-md-4 col-lg-3">
                            <div class="card mb-3" id="gallery">
                                <img src="{{ asset('storage/gallery/' . $gallery->image) }}" class="card-img-top"
                                    alt="{{ $gallery->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gallery->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    <!-- a block container is required -->
                    <div>
                        <img id="image" src="{{ asset('images/bam-hidden-floor.jpg') }}" alt="Picture">
                    </div>

                    <div>
                        <ul id="images">
                            <li><img src="{{ asset('images/bam-hidden-floor.jpg') }}" alt="Picture 1"></li>
                            <li><img src="{{ asset('images/jue-viole-grace.jpg') }}" alt="Picture 2"></li>
                            <li><img src="{{ asset('images/khun-eduan.jpg') }}" alt="Picture 3"></li>
                        </ul>
                    </div>
                </div>
                {{ $galleries->links() }}
            </div>
        </div>
    </div>
@endsection
