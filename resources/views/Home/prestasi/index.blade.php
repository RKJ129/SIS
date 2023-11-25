@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Prestasi</h3>
    <hr>
    <div class="container">
        @if (count($prestasi) > 0)
            <!-- card -->
            <div class="row">
                @foreach ($prestasi as $item)
                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <img class="card-img-top container-img-berita-user"
                                src="{{ url('img/prestasi/' . $item->img) }}">
                            <div class="card-body">
                                <div class="judul-berita-user">
                                    <a href="{{ route('home.detailPrestasi', $item->id) }}">{{ $item->judul }}</a>
                                </div>
                                <div class="date-berita-user">
                                    <p>{{ $item->created_at->format('M d, Y') }} | Prestasi</p>
                                </div>
                                <div class="desc-berita-user">
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $prestasi->links() }}
        @else
            <p class="text-center"><i>No Content!</i></p>
        @endif
    </div>
@endsection
