@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pointer-row.css') }}">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Daftar Layanan Jasa</h1>
                <a href="{{ route('admin.service.create') }}" class="btn btn-success w-100">Tambah Jasa</a>
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
                            @foreach ($services as $service)
                                <tr>
                                    <td class="d-none" scope="row">{{ $service->id }}</td>
                                    <td onclick="window.location='{{ route('admin.service.show', Str::slug($service->title)) }}'"
                                        id="title">
                                        {{ $service->title }}</td>
                                    <td class="d-none">{{ $service->status }}</td>
                                    <td class="d-none">{{ $service->created_at }}</td>
                                    <td>{{ $service->updated_at }}</td>
                                    <td>{{ $service->username }}</td>
                                    <td class="text-center">
                                        <a name="edit{{ $service->id }}" id="edit{{ $service->id }}"
                                            class="btn btn-warning"
                                            href="{{ route('admin.service.edit', $service->id) }}" role="button">
                                            <i class="bi bi-pencil"></i> Ubah
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-grid gap-2">
                                            <button type="button" name="visible" id="visible" class="btn border-dark"
                                                data-id="{{ $service->id }}" data-status="{{ $service->status }}">
                                                <i class="bi{{ $service->status ? ' bi-eye' : ' bi-eye-slash' }}"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a name="destroy" id="destroy" class="btn btn-danger" role="button"
                                            data-target="{{ route('admin.service.destroy', $service->id) }}"
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
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(function() {
            $('button#visible').each(function() {
                if ($(this).data('status')) {
                    $(this).addClass('btn-light');
                } else {
                    $(this).addClass('btn-dark');
                }
            });
        });
        $('button#visible').on('click', function() {
            $(this).toggleClass('btn-light');
            $(this).children('i').toggleClass('bi-eye-slash');
            $(this).toggleClass('btn-dark');
            $(this).children('i').toggleClass('bi-eye');
            $(this).data('status') ? $(this).data('status', 0) : $(this).data('status', 1);
            id = $(this).data('id');
            status = $(this).data('status');
            console.log($(this).children("i").attr('class'));
            $.get(`/admin/service/status/${id}/${status}`);
        })
    </script>
@endsection
