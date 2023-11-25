@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Sarana & Prasarana</h3>
    <hr>
    <div class="container">
        @isset($saranaPrasarana)
        <div class="text-justify">
            <p>{!! $saranaPrasarana->sarana_prasarana !!}</p>
        </div>
        @endisset
        @empty($saranaPrasarana)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection