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
            <h1 class="h3 mb-0 text-gray-800">Sejarah Sekolah</h1>
        </div>

        <div class="col-lg-12">

            <!-- button -->
            <div class="mb-2 d-flex">
                @if (count($data) > 0)
                    <div class="">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#updateModal">Ubah</button>
                    </div>
                    <div class="col-6">
                        @foreach ($data as $item)
                            @method('DELETE')
                            <a class="btn btn-sm btn-outline-danger" href="{{ route('admin.sejarah.delete') }}" data-confirm-delete="true">Reset</a>
                        @endforeach
                    </div>
                @else
                    <div class="">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createModal">Tambah</button>
                    </div>
                @endif


            </div>


            <!-- modal create -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Input Sejarah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.sejarah.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control summernote" name="sejarah" id="summernote" cols="30" rows="10"></textarea>
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
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Input Sejarah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @foreach ($data as $item)
                                <form action="{{ route('admin.sejarah.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control summernote" name="sejarah" id="summernote" cols="30" rows="10">{{ $item->sejarah }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sejarah Singkat SD Negeri 023</h6>
                </div>
                <div class="card-body text-justify">
                    @if (count($data) > 0)
                        @foreach ($data as $item)
                            {!! $item->sejarah !!}
                        @endforeach
                    @else
                        <div class="text-center"><i>Tidak ada data!</i></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
