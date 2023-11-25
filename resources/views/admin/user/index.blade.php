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
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
        </div>

        <!-- card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Admin SD Negeri 023</h6>
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tambah</button>
                </div>
                <!-- table start -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="col-1">No.</th>
                                <th class="col-2">Foto</th>
                                <th class="col-2">Username</th>
                                <th class="col-2">Email</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="col-1">No.</th>
                                <th class="col-2">Foto</th>
                                <th class="col-2">Username</th>
                                <th class="col-2">Email</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="{{ Auth::check() && Auth::user()->id === $user->id ? 'table-success' : '' }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img class="img-fluid rounded mx-auto d-block h-50 w-50"
                                            src="{{ $user->img ? url('img/users/' . $user->img) : url('img/users/img_default.jpeg') }}">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="">
                                        <div class="d-flex">
                                            <div class="mx-1">
                                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#updatePasswordModal{{ $user->id }}"><i
                                                        class="fa-solid fa-lock"></i></button>
                                            </div>

                                            <div class="mx-1">
                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#updateImageModal{{ $user->id }}"><i
                                                        class="fa-solid fa-image"></i></button>
                                            </div>

                                            <div class="mx-1">
                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#updateModal{{ $user->id }}"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                            </div>


                                            <div class="mx-1">
                                                <a data-delete-url="{{ route('admin.users.delete', $user->id) }}"
                                                    class="btn btn-sm btn-danger deleteBtn"
                                                    {{ Auth::check() && Auth::user()->id === $user->id ? 'hidden' : '' }}><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <x-user.create />
                                <x-user.update-password :user="$user" />
                                <x-user.update-image :user="$user" />
                                <x-user.update :user="$user" />
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table end -->
            </div>
        </div>
    </div>
@endsection
