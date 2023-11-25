@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Kepala Sekolah</h3>
    <hr>
    <div class="container">
        @isset($kepalaSekolah)
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-secondary">
                    <div class="img-home-kepsek">
                        <img class="img-fluid rounded" src="{{ url('img/kepsek/' . $kepalaSekolah->img) }}">
                        <p class="text-center fw-bolder">{{ $kepalaSekolah->name }}</p>
                        <p class="text-center my-n3" style="font-size: 12.5px">Kepala Sekolah SD Negeri 023</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                    {{-- <h5 class="mb-4 text-secondary text-capitalize">Sambutan kepala sekolah</h5> --}}
                    <p class="text-justify" style="text-indent: 1.5em;">{{ $kepalaSekolah->description }}</p>
                </div>
            </div>
        @endisset
        @empty($kepalaSekolah)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
