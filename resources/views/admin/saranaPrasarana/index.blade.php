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
            <h1 class="h3 mb-0 text-gray-800">Sarana & Prasarana</h1>
        </div>

        <!-- buttons -->
        @isset($data)
            <div class="mb-2 d-flex">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Ubah</button>
                    <div class="mx-2">
                        <a href="{{ route('admin.saranaPrasarana.delete') }}" class="btn btn-sm btn-outline-danger" data-confirm-delete="true">Reset</a>
                    </div>
            </div>
        @endisset

        @empty($data)
            <div class="mb-2">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createModal">Tambah</button>
            </div>
        @endempty

        <!-- modal create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Input Sarana & Prasarana</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.saranaPrasarana.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="sarana_prasarana">Deskripsi :</label>
                                <textarea name="sarana_prasarana" id="sarana_prasarana" rows="5" class="form-control summernote"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                        <form action="{{ !empty($data) ? route('admin.saranaPrasarana.update', $data->id) : '' }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="sarana_prasarana">Sarana & Prasarana</label>
                                <textarea name="sarana_prasarana" id="sarana_prasarana" rows="5" class="form-control summernote">{{ isset($data) ? $data->sarana_prasarana : '' }}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sarana & Prasarana SD Negeri 023</h6>
            </div>
            <div class="card-body">
                @isset($data)
                    {!! $data->sarana_prasarana !!}
                @endisset

                @empty($data)
                    <div class="text-center">
                        <i>Tidak ada data!</i>
                    </div>
                @endempty

            </div>
        </div>
    </div>
@endsection
