@extends('Home.main')

@section('content')
    {{-- <h3 class="text-center text-secondary">Galeri</h3> --}}
    <hr>
        @isset($galeriVideo)
            <div class="card shadow mb-4">
                <div class="card-body">
                    <video width="100%" height="100%" controls>
                        <source class="img-fluid" src="{{ url('img/galeri/video/' . $galeriVideo->video) }}" type="video/mp4">
                    </video>
                </div>
            </div>
        @endisset

        @empty($galeriVideo)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
