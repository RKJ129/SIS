<!-- modal create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel"> Deskripsi Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.berita.kegiatanSekolah.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="judul">Judul :</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul"
                                id="judul">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="img">Foto :</label>
                            <input type="file" class="form-control" name="img" id="img"
                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                            <small class="text-danger">*Wajib diisi*</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Deskripsi :</label>
                            <textarea class="form-control summernote" name="description" id="description" rows="5"
                                placeholder="Masukkan deskripsi"></textarea>
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
