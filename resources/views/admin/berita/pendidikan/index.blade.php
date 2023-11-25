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
            <h1 class="h3 mb-0 text-gray-800">Berita Pendidikan</h1>
        </div>

        <!-- card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Berita Pendidikan SD Negeri 023</h6>
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tambah</button>
                </div>

                <x-berita.pendidikan.create />

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
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="container-img">
                                            <img class="rounded" src="{{ url('img/berita/pendidikan/' . $item->img) }}">
                                        </div>
                                    </td>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-sm btn-info mx-1" data-bs-toggle="modal"
                                                data-bs-target="#detailModal{{ $item->id }}"><i
                                                    class="fa-solid fa-circle-info"></i></button>

                                            <button type="button" class="btn btn-sm btn-primary mx-1"
                                                data-bs-toggle="modal" data-bs-target="#updateModal{{ $item->id }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></button>

                                            <div class="mx-1">
                                                <a class="btn btn-sm btn-danger deleteBtn"
                                                data-delete-url="{{ route('admin.berita.pendidikan.delete', $item->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                            </div>

                                            {{-- <a href="{{ route('admin.berita.pendidikan.delete', $item->id) }}"
                                                class="btn btn-sm btn-danger mx-1"><i class="fa-solid fa-trash"></i></a> --}}

                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                        
                        <x-berita.detail :item="$item" />
                        <x-berita.pendidikan.update :item="$item" />
                        @endforeach


                    </table>


                </div>

                <!-- modal create -->
                {{-- <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"> Deskripsi Berita</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.berita.pendidikan.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="judul">Judul :</label>
                                            <input type="text" class="form-control" name="judul" id="judul"
                                                placeholder="Masukkan judul" value="{{ old('judul') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="img">Foto :</label>
                                            <input type="file" class="form-control" name="img" id="img"
                                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                            <small class="text-danger">*Wajib diisi*</small>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="description">Deskripsi :</label>
                                            <textarea class="form-control summernote" name="description" id="description" rows="5"
                                                placeholder="Masukkan deskripsi">{{ old('description') }}</textarea>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>
@endsection
