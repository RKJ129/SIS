@extends('admin.main')

@section('content')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Prestasi</h1>
        </div>

        <!-- card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Prestasi SD Negeri 023</h6>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <button type="button" class="btn btn-sm btn-primary mx-1" data-bs-toggle="modal"
                    data-bs-target="#createModal">Tambah</button>
            </div>

            <x-prestasi.create />

            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th class="col-1">No.</th>
                            <th class="col-3">Foto</th>
                            <th class="col-6">Judul</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="col-1">No.</th>
                            <th class="col-3">Foto</th>
                            <th class="col-6">Judul</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="box-galeri">
                                        <img class="img-fluid rounded mx-auto d-block h-50 w-50" src="{{ url('img/prestasi/' . $item->img) }}">
                                    </div>
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-sm btn-info mx-1" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $item->id }}"><i class="fa-solid fa-circle-info"></i></button>

                                        <button type="button" class="btn btn-sm btn-primary mx-1" data-bs-toggle="modal"
                                            data-bs-target="#updateModal{{ $item->id }}"><i
                                                class="fa-solid fa-pen-to-square"></i></button>

                                        <a href="{{ route('admin.prestasi.delete', $item->id) }}"
                                            class="btn btn-sm btn-danger mx-1"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <x-prestasi.detail :item="$item" />
                            <x-prestasi.update :item="$item" />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
