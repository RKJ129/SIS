<!-- modal create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Input User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Username :</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Foto :</label>
                            <input type="file" class="form-control" name="img" id="img"
                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
