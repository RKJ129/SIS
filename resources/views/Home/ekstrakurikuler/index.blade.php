@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Ekstrakurikuler</h3>
    <hr>
    <div class="container">
        @isset($ekstrakurikuler)
        <div class="text-justify">
            <p>{!! $ekstrakurikuler->description !!}</p>
        </div>
        @endisset
        @empty($ekstrakurikuler)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection