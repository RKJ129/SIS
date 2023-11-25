<!-- modal create -->
<div class="modal fade" id="updateModal{{ $user->id }}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Input User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Username :</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama" value="{{ old('name', $user->name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{ old('email', $user->email) }}">
                        </div>

                        {{-- <div class="mb-3">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" value="{{ old('password', $user->password) }}">
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Foto :</label>
                            <input type="file" class="form-control" name="img" id="img"
                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div> --}}

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
