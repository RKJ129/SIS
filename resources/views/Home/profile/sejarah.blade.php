@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Sejarah Singkat</h3>
    <hr>
    <div class="container">
        @isset($sejarah)
        <div class="text-justify">
            <p>{!! $sejarah->sejarah !!}</p>
        </div>
        @endisset
        @empty($sejarah)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection


