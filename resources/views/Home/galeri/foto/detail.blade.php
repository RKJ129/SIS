@extends('Home.main')

@section('content')
    {{-- <h3 class="text-center text-secondary">Galeri</h3> --}}
    <hr>
    <div class="container">
        {{-- {{ dd($image) }} --}}
        @isset($galeriFoto)
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        @foreach (json_decode($galeriFoto->img) as $image)
                            {{-- {{ dd($image) }} --}}
                            <div class="col-4">
                                <div class="img-detail-galeri rounded"
                                    style="background-image: url('{{ asset('img/galeri/foto/' . $image) }}')"></div>
                                {{-- <img class="container img-fluid" src="{{ url('img/galeri/foto/' . $image) }}"> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endisset

        @empty($galeriFoto)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
