@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Galeri Foto</h3>
    <hr>
    <div class="container">
        @if (count($galeriFoto) > 0)
            <!-- card -->
            <div class="row">
                @foreach ($galeriFoto as $item)
                    <div class="col-lg-3">
                        <div class="card shadow mb-4">
                            <div class="container-img-galeri-user"
                                style="background-image: url({{ asset('img/galeri/foto/' . json_decode($item->img)[0]) }})">
                            </div>
                            {{-- {{ dd(json_decode($item->img)[0]) }} --}}
                            {{-- <img class="card-img-top container-img-galeri-user"
                                src="{{ url('img/galeri/foto/' . json_decode($item->img)[0]) }}"> --}}
                            <div class="card-body">
                                <div class="judul-galeri-user">
                                    <a href="{{ route('home.galeri.detailFoto', $item->id) }}">{{ $item->judul }}</a>
                                </div>
                                <div class="date-galeri-user">
                                    <p>{{ $item->created_at->format('M d, Y') }} | Foto</p>
                                </div>
                                {{-- <div class="desc-berita-user">
                                    <p>{!! $item->description !!}</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $galeriFoto->links() }}
            </div>
        @else
            <p class="text-center"><i>No Content!</i></p>
        @endif
    </div>
@endsection
