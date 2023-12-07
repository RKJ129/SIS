@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Struktur Organisasi</h3>
    <hr>
    <div class="container">
        @isset($strukturOrganisasi)
            <div class="d-flex justify-content-center">
                <img class="img-fluid rounded" src="{{ url('img/struktur_organisasi/' . $strukturOrganisasi->img) }}">
            </div>
        @endisset
        @empty($strukturOrganisasi)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
