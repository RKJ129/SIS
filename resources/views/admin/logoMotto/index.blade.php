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
            <h1 class="h3 mb-0 text-gray-800">Logo & Motto</h1>
        </div>

        <!-- buttons -->
        @if (isset($data))
            <div class="mb-2 d-flex">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Ubah</button>
                <div class="mx-2">
                    @method('DELETE')
                    <a class="btn btn-sm btn-outline-danger" href="{{ route('admin.logoMoto.delete', $data->id) }}"
                        data-confirm-delete="true">Reset</a>
                </div>
            </div>
        @else
            <div class="mb-2">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createModal">Create</button>
            </div>
        @endif


        <!-- modal create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Input Logo & Motto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.logoMoto.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="motto">Motto :</label>
                                <input class="form-control" type="text" name="motto" id="motto"
                                    value="{{ old('motto') }}">
                                {{-- <textarea class="form-control" name="motto" id="motto" cols="30" rows="5"></textarea> --}}
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="img">Logo :</label>
                                <input class="form-control" type="file" name="img" id="img"
                                    accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="description_logo">Description Logo :</label>
                                <textarea class="form-control summernote" name="description_logo" id="description_logo" cols="30" rows="10">{{ old('description_logo') }}</textarea>
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
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Input Logo & Motto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <form action="{{ isset($data) ? route('admin.logoMoto.update', $data->id) : '' }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="motto">Motto :</label>
                                <input class="form-control" type="text" name="motto" id="motto"
                                    value="{{ old('motto', isset($data) ? $data->motto : '') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="img">Logo :</label>
                                <input class="form-control" type="file" name="img" id="img"
                                    accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                <small class="text-danger">*Gambar wajib diisi*</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="description_logo">Description Logo :</label>
                                <textarea class="form-control summernote" name="description_logo" id="description_logo" cols="30"
                                    rows="10">{{ old('description_logo', isset($data) ? $data->description_logo : '') }}</textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <!-- card logo -->
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Logo</h6>
                    </div>

                    <div class="card-body">
                        <div class="mb-2">
                            @isset($data)
                                <div class="img-container mb-1">
                                    <img src="{{ url('/img/logoSekolah/' . $data->img)}}"
                                        class="img-fluid">
                                </div>
                                <div class="text-justify">
                                    {!! $data->description_logo!!}
                                </div>
                            @endisset
                            @empty($data)
                                <div class="text-center"><i>Tidak ada data!</i></div>
                            @endempty

                        </div>

                        <div class="m-2">

                        </div>
                    </div>
                </div>
            </div>

            <!-- card motto -->
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Motto</h6>
                    </div>

                    <div class="card-body">
                        @isset($data)
                            <div class="fw-bold">
                                {{ $data->motto}}
                            </div>
                        @endisset
                        @empty($data)
                            <div class="text-center"><i>Tidak ada data!</i></div>
                        @endempty
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
