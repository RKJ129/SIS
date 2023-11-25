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
            <h1 class="h3 mb-0 text-gray-800">Visi & Misi</h1>
        </div>

        <!-- button -->
        @if (isset($data))
            <div class="mb-2 d-flex">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Ubah</button>
                <div class="mx-2">
                    @method('DELETE')
                    <a class="btn btn-sm btn-outline-danger" href="{{ route('admin.visiMisi.delete') }}"
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
                        <h5 class="modal-title" id="createModalLabel">Input Visi & Misi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.visiMisi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="visi">Visi :</label>
                                <input type="text" class="form-control" name="visi" id="visi" placeholder="Masukkan visi" value="{{ old('visi') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="misi">Misi :</label>
                                <textarea class="form-control summernote" name="misi" id="misi" cols="30" rows="10">{{ old('misi') }}</textarea>
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
                        <h5 class="modal-title" id="updateModalLabel">Input Visi & Misi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ isset($data) ? route('admin.visiMisi.update', $data->id) : '' }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="visi">Visi :</label>
                                <input type="text" class="form-control" name="visi" id="visi" placeholder="Masukkan visi" value="{{ old('visi', isset($data) ? $data->visi : '') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="misi">Misi :</label>
                                <textarea class="form-control summernote" name="misi" id="misi" cols="30" rows="10">{{ old('misi', isset($data) ? $data->misi : '') }}</textarea>
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
        <div class="row">
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Visi SD Negeri 023</h6>
                    </div>
                    <div class="card-body">
                        <div class="m-2">
                            @if (isset($data))
                                <div class="text-justify fw-bolder">
                                    <i>{!! $data->visi !!}</i>
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

            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Misi SD Negeri 023</h6>
                    </div>
                    <div class="card-body">
                        <div class="m-2">
                            @if (isset($data))
                                <div class="text-justify">
                                    {!! $data->misi !!}
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
