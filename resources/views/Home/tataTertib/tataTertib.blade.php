@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Tata Tertib Sekolah</h3>
    <hr>
    <div class="container">
        @isset($tataTertib)
        <div class="text-justify">
            <p>{!! $tataTertib->description !!}</p>
        </div>
        @endisset
        @empty($tataTertib)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection