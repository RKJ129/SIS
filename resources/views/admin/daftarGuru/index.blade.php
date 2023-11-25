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
            <h1 class="h3 mb-0 text-gray-800">Data Guru/Tendik</h1>
        </div>

        <!-- card logo -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Guru SD Negeri 023</h6>
            </div>

            <div class="card-body">
                <!-- buttons -->
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tambah</button>
                </div>
                <x-guru.create />

                <!-- table start -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>JK</th>
                                <th>Tempat/Tgl. Lahir</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>JK</th>
                                <th>Tempat/Tgl. Lahir</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dataGuru as $guru)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="img-guru">
                                            <img class="rounded" src="{{ url('img/guru/' . $guru->img) }}">
                                        </div>
                                    </td>
                                    <td>{{ $guru->name }}</td>
                                    <td>{{ $guru->nip }}</td>
                                    <td>{{ $guru->jenis_kelamin }}</td>
                                    <td>{{ $guru->tempat_lahir . ', ' . $guru->tgl_lahir }}</td>
                                    <td>{{ $guru->alamat }}</td>
                                    <td>{{ $guru->jabatan }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mx-1">
                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#updateImageModal{{ $guru->id }}"><i
                                                        class="fa-regular fa-image"></i></button>
                                            </div>

                                            <div class="mx-1">
                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#updateModal{{ $guru->id }}"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                            </div>


                                            <div class="mx-1">
                                                <a class="btn btn-sm btn-danger deleteBtn"
                                                    data-delete-url="{{ route('admin.daftarGuru.destroy', $guru->id) }}"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <x-guru.update :guru="$guru" :dataGuru="$dataGuru" />
                                <x-guru.update-image :guru="$guru" />
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table end -->
            </div>
        </div>
    </div>
@endsection
