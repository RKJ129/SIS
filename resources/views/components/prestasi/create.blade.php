<!-- modal create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Input Prestasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul :</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="{{ old('judul') }}">
                        </div>

                        
                        <div class="mb-3">
                            <label for="img" class="form-label">Foto :</label>
                            <input type="file" class="form-control" name="img" id="img"
                            accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi :</label>
                            <textarea class="form-control summernote" name="description" id="description" cols="30" rows="5"></textarea>
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
