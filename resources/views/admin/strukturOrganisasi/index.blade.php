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
            <h1 class="h3 mb-0 text-gray-800">Struktur Organisasi</h1>
        </div>

        <div class="col-lg-12">
            <!-- button -->
            @if (isset($data))
                <div class="mb-2 d-flex">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#updateModal">Ubah</button>
                    <div class="mx-2">
                        @method('DELETE')
                        <a class="btn btn-sm btn-outline-danger"
                            href="{{ route('admin.strukturOrganisasi.delete', $data->id) }}"
                            data-confirm-delete="true">Reset</a>
                    </div>
                </div>
            @else
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tambah</button>
                </div>
            @endif


            <!-- modal create -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Input Struktur Organisasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.strukturOrganisasi.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="img">Foto :</label>
                                    <input class="form-control" type="file" name="img" id="img"
                                        accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- modal update -->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Input Struktur Organisasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ !empty($data) ? route('admin.strukturOrganisasi.update', $data->id) : '' }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label" for="img">Image</label>
                                    <input class="form-control" type="file" name="img" id="img"
                                        accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Struktur Organisasi SD Negeri 023</h6>
                </div>
                <div class="card-body">
                    <div class="m-2">
                        @isset($data)
                            <img src="{{ url('/img/struktur_organisasi/' . $data->img) }}" class="img-fluid container-fluid">
                        @endisset
                        @empty($data)
                            <div class="text-center">
                                <i>Tidak ada data!</i>
                            </div>
                        @endempty
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
