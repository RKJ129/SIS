<!-- modal create -->
<div class="modal fade" id="updateModal{{ $item->id }}" tabindex="-1" aria-labelledby="updateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel"> Galeri Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ route('admin.galeri.video.update', $item->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul :</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="{{ old('judul', $item->judul) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Thumbnail :</label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="video">Video :</label>
                            <input type="file" class="form-control" name="video" id="video"
                                accept="video/mp4">
                            <small class="text-danger">*Wajib diisi*</small>
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
