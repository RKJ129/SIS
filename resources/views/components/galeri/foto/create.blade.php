<!-- modal create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel"> Galeri Foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ route('admin.galeri.foto.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="judul">Judul :</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="{{ old('judul') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="img">Foto :</label>
                            <input type="file" class="form-control" name="img[]" id="img" multiple
                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
