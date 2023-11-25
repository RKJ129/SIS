@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Galeri Video</h3>
    <hr>
    <div class="container">
        @if (count($galeriVideo) > 0)
            <!-- card -->
            <div class="row">
                @foreach ($galeriVideo as $item)
                    <div class="col-lg-3">
                        <div class="card shadow mb-4">
                            <div class="container-img-galeri-user"
                                style="background-image: url({{ asset('img/galeri/video/thumbnail/' . $item->thumbnail) }})">
                            </div>
                            <div class="card-body">
                                <div class="judul-galeri-user">
                                    <a href="{{ route('home.galeri.detailVideo', $item->id) }}">{{ $item->judul }}</a>
                                </div>
                                <div class="date-galeri-user">
                                    <p>{{ $item->created_at->format('M d, Y') }} | Video</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="d-flex justify-content-center">
                {{ $galeriVideo->links() }}
            </div> --}}
        @else
            <p class="text-center"><i>No Content!</i></p>
        @endif
    </div>
@endsection
