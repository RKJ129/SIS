@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Berita/Pengumuman</h3>
    <hr>
    <div class="container">
        @if (count($berita) > 0)
            <!-- card -->
            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <img class="card-img-top container-img-berita-user"
                                src="{{ url('img/berita/kegiatan-sekolah/' . $item->img) }}">
                            <div class="card-body">
                                <div class="judul-berita-user">
                                    <a href="{{ route('home.berita.detaiBerita', $item->id) }}">{{ $item->judul }}</a>
                                </div>
                                <div class="date-berita-user">
                                    <p>{{ $item->created_at->format('M d, Y') }}</p>
                                </div>
                                <div class="desc-berita-user">
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $berita->links() }}
            @else
            <p class="text-center"><i>No Content!</i></p>
        @endif
    </div>
    @endsection
