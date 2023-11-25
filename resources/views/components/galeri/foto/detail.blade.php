<!-- modal create -->
<div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel"> Galeri Foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- {{ $datas }} --}}

                @foreach (json_decode($item->img) as $dataImage)
                    <div class=" mb-2">
                        <img class="container-fluid img-fluid " src="{{ url('img/galeri/foto/' . $dataImage) }}">

                    </div>
                @endforeach
                {{-- <div class="d-flex justify-content-center">
                    {!! $datas->links() !!}
                </div> --}}
            </div>

        </div>
    </div>
</div>
