@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pointer-row.css') }}">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h1>Artikel</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.article.create') }}" class="btn btn-success w-100">Tambah Artikel</a>
                <div class="row p-3 table-responsive">
                    <table id="data" class="table table-light table-striped table-hover table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th class="d-none">ID</th>
                                <th>Judul</th>
                                <th class="d-none">Status</th>
                                <th class="d-none">Created At</th>
                                <th>Terakhir Diubah</th>
                                <th>Penulis</th>
                                <th>Ubah</th>
                                <th>Visibilitas</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="d-none" scope="row">{{ $post->id }}</td>
                                    <td onclick="window.location='{{ route('admin.article.show', $post->id) }}'"
                                        id="title">
                                        {{ $post->title }}</td>
                                    <td class="d-none">{{ $post->status }}</td>
                                    <td class="d-none">{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td>{{ $post->username }}</td>
                                    <td class="text-center">
                                        <a name="edit{{ $post->id }}" id="edit{{ $post->id }}"
                                            class="btn btn-warning" href="{{ route('admin.article.edit', $post->id) }}"
                                            role="button">
                                            <i class="bi bi-pencil"></i> Ubah
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-grid gap-2">
                                            <button type="button" name="visible" id="visible" class="btn btn-light"
                                                data-id="{{ $post->id }}" data-status="{{ $post->status }}">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a name="destroy" id="destroy" class="btn btn-danger" role="button"
                                            data-target="{{ route('admin.article.destroy', $post->id) }}"
                                            data-method="DELETE" data-disabled="true">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <button id="test" data-id="10">asdas</button>
    <button id="test" data-id="asd">asdas</button>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $('button#visible').on('click', function () {
            console.log($(this).data('id'));
            console.log($(this).data('status'));
            // $(this).removeClass('')

        })
    </script>
@endsection
