<!-- modal create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel"> Galeri Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="fileUploadForm" action="{{ route('admin.galeri.video.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul :</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="{{ old('judul') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Thumbnail :</label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="video">Video :</label>
                            <input type="file" class="form-control" name="video" id="video"
                            accept="video/mp4">
                        </div>                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                        <div class="form-group">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
