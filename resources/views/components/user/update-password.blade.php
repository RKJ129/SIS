<!-- modal create -->
<div class="modal fade" id="updatePasswordModal{{ $user->id }}" tabindex="-1" aria-labelledby="updatePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePasswordModalLabel">Input User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.users.updatePassword', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Password Lama :</label>
                            <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Masukkan password lama">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru :</label>
                            <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password" placeholder="Masukkan password baru">
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Konfirmasi Password :</label>
                            <input type="password" class="form-control" name="password_confirmation" id="new_password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi password">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
