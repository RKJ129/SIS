<!-- modal create -->
<div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-labelledby="detailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel"> Galeri Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video width="100%" height="100%" controls>
                    <source class="img-fluid" src="{{ url('img/galeri/video/' . $item->video) }}" type="video/mp4">
                </video>
            </div>

        </div>
    </div>
</div>
