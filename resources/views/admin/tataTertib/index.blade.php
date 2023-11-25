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
            <h1 class="h3 mb-0 text-gray-800">Tata Tertib</h1>
        </div>

        <!-- buttons -->
        @isset($data)
            <div class="mb-2 d-flex">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Ubah</button>
                <div class="mx-2">
                    <a class="btn btn-sm btn-outline-danger" href="{{ route('admin.tataTertib.delete') }}" data-confirm-delete="true">Reset</a>
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
                        <h5 class="modal-title" id="createModalLabel">Input Tata Tertib</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.tataTertib.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="description">Deskripsi :</label>
                                <textarea name="description" id="description" rows="5" class="form-control summernote"></textarea>
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
                        <h5 class="modal-title" id="updateModalLabel">Input Tata Tertib</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ isset($data) ? route('admin.tataTertib.update', $data->id) : '' }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="description">Tata Tertib :</label>
                                <textarea name="description" id="description" rows="5" class="form-control summernote">{!! isset($data) ? $data->description : '' !!}</textarea>
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
                <h6 class="m-0 font-weight-bold text-primary">Tata Tertib SD Negeri 023</h6>
            </div>
            <div class="card-body">
                @isset($data)
                    <div class="text-justify">
                        {!! $data->description !!}
                    </div>
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
