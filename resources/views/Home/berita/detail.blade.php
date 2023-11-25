@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Berita/Pengumuman</h3>
    <hr>
    <div class="container">
        @isset($detailBerita)
            <div class="card shadow mb-4">
                <div class="container-img-berita-user-detail" style="background-image: url('{{ $detailBerita->kategori == 'pendidikan' ? asset('img/berita/pendidikan/' . $detailBerita->img) : asset('img/berita/kegiatan-sekolah/' . $detailBerita->img) }}')"></div>
                {{-- <img class="card-img-top container-img-berita-user-detail" src="{{ $detailBerita->kategori == 'pendidikan' ? url('img/berita/pendidikan/' . $detailBerita->img) : url('img/berita/kegiatan-sekolah/' . $detailBerita->img) }}"> --}}
                <div class="card-body">
                    <div class="judul-berita-user-detail">
                        <h5>{{ $detailBerita->judul }}</h5>
                    </div>
                    <div class="date-berita-user-detail">
                        <p>{{ $detailBerita->created_at->format('M d, Y') }} | {{ $detailBerita->kategori }}</p>
                    </div>
                    <div class="desc-berita-user-detail">
                        <p>{!! $detailBerita->description !!}</p>
                    </div> 
                </div>
            </div>
        @endisset

        @empty($detailBerita)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection

