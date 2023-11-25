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
            <h1 class="h3 mb-0 text-gray-800">Galeri</h1>
        </div>
    </div>

    <!-- card -->
    <div class="card shadow mb-4 mx-4 col-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Foto SD Negeri 023</h6>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary mx-1" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tambah</button>
                </div>
                @if(count($datas) > 0)
                    <div class="mb-2">
                        <a href="{{ route('admin.galeri.foto.truncate') }}" class="btn btn-sm btn-outline-danger"
                            data-confirm-delete="true">Reset</a>
                    </div>
                @endif
            </div>

            <x-galeri.foto.create />

            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th class="col-2">No.</th>
                            <th class="col-8">Judul</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="col-2">No.</th>
                            <th class="col-8">Judul</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>
                                    <div class="box-galeri">
                                        <img class="rounded" src="{{ url('img/galeri/foto/' . $item->img) }}">
                                    </div>
                                </td> --}}
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <div class="d-flex">

                                        <div>
                                            <button type="button" class="btn btn-sm btn-info mx-1" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $item->id }}"><i class="fa-solid fa-circle-info"></i></button>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-sm btn-primary mx-1" data-bs-toggle="modal"
                                            data-bs-target="#updateModal{{ $item->id }}"><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                        </div>

                                        <div>
                                            <a data-delete-url="{{ route('admin.galeri.foto.delete', $item->id) }}"
                                                class="btn btn-sm btn-danger mx-1 deleteBtn"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <x-galeri.foto.detail :datas="$datas" :item="$item" />
                            <x-galeri.foto.update :item="$item" />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
