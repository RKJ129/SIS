@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Prestasi</h3>
    <hr>
    <div class="container">
        @isset($detailPrestasi)
            <div class="card shadow mb-4">
                <div class="container-img-berita-user-detail" style="background-image: url('{{ asset('img/prestasi/' . $detailPrestasi->img) }}')"></div>
                {{-- <img class="card-img-top container-img-berita-user-detail" src="{{ url('img/prestasi/' . $detailPrestasi->img) }}"> --}}
                <div class="card-body">
                    <div class="judul-berita-user-detail">
                        <h5>{{ $detailPrestasi->judul }}</h5>
                    </div>
                    <div class="date-berita-user-detail">
                        <p>{{ $detailPrestasi->created_at->format('M d, Y') }} | {{ $detailPrestasi->kategori }}</p>
                    </div>
                    <div class="desc-berita-user-detail">
                        <p>{!! $detailPrestasi->description !!}</p>
                    </div>
                </div>
            </div>
        @endisset

        @empty($detailPrestasi)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
