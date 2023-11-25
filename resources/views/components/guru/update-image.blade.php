<!-- modal update -->
<div class="modal fade" id="updateImageModal{{ $guru->id }}" tabindex="-1" aria-labelledby="updateImageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateImageModalLabel">Update Foto Guru/Tendik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.daftarGuru.updateImage', $guru->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="mb-3">
                                <label for="img" class="form-label">Foto :</label>
                                <input type="file" class="form-control" name="img" id="img"
                                    accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                <small class="text-danger">*Wajib diisi*</small>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary open_modal"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>