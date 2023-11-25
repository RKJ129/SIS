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
            <h1 class="h3 mb-0 text-gray-800">Kepala Sekolah</h1>
        </div>

        <div class="col-lg-12">

            @if (!empty($data))
                <div class="mb-2 d-flex">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kepsekUpdateModal">Edit</button>
                    <div class="mx-2">
                        @method('DELETE')
                        <a class="btn btn-sm btn-outline-danger"
                            href="{{ !empty($data) ? route('admin.kepsek.delete', $data->id) : '' }}"
                            data-confirm-delete="true">Reset</a>
                    </div>
                </div>
            @else
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kepsekCreateModal">Tambah</button>
                </div>
            @endif


            <!-- modal create kepala sekolah -->
            <div class="modal fade" id="kepsekCreateModal" tabindex="-1" aria-labelledby="kepsekCreateModal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="kepsekCreateModalLabel">Input Kepala Sekolah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.kepsek.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama :</label>
                                    <input type="text"class="form-control" name="name" id="name"
                                        placeholder="Masukkan nama" value="{{ old('name') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Foto :</label>
                                    <input type="file" name="img" id="img" class="form-control"
                                        accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi:</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"
                                        placeholder="Masukkan deskripsi">{{ old('description') }}</textarea>
                                </div>
                                <div class="modal-footer mt-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- update modal kepala sekolah -->
            <div class="modal fade" id="kepsekUpdateModal" tabindex="-1" aria-labelledby="kepsekUpdateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="kepsekUpdateModalLabel">Input Kepala Sekolah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ !empty($data) ? route('admin.kepsek.update', $data->id) : '' }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama :</label>
                                    <input type="text"class="form-control" name="name" id="name"
                                        value="{{ !empty($data) ? $data->name : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Foto :</label>
                                    <input type="file" name="img" id="img" class="form-control"
                                        accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi:</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ !empty($data) ? $data->description : '' }}</textarea>
                                </div>
                                <div class="modal-footer mt-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col lg-4">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                        </div>
                        <div class="card-body">
                            <img src="{{ !empty($data) ? url('/img/kepsek/' . $data->img) : url('/img/kepsek/img_default.jpeg') }}"
                                class="img-fluid rounded-1 mb-1 container-fluid">
                            <div class="text-center">
                                <p class="fw-bold mt-1 mb-0"> {{ !empty($data) ? $data->name : '-' }}</p>
                                <p class="mb-0" style="font-size: 12px">Kepala Sekolah SD Negeri 023</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Deskripsi</h6>
                        </div>
                        <div class="card-body">
                            @if (!empty($data))
                                <div class="text-justify" style="text-indent: 1.5em">
                                    {{ $data->description }}
                                </div>
                            @else
                                <div class="text-center">
                                    <i>Tidak ada data!</i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
