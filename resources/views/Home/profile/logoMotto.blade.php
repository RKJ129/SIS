@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Logo & Motto</h3>
    <hr>
    <div class="container">
        @isset($logoMotto)
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="text-secondary">Motto SD Negeri 023 Balikpapan</h5>
                        <p><i>"{{ $logoMotto->motto }}"</i></p>
                    </div>

                    <div class="">
                        <h5 class="text-secondary">Logo SD Negeri 023 Balikpapan</h5>
                        <div class="float-start me-5 mb-5 bg-primary" style="width: 20rem; height: 20rem;">
                            <img class="img-fluid rounded float-start" src="{{ url('img/logoSekolah/' . $logoMotto->img) }}">
                        </div>
                        <p class="text-justify ms-3">{!! $logoMotto->description_logo !!}</p>
                    </div>
                </div>
            </div>
        @endisset

        @empty($logoMotto)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
