@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Visi dan Misi</h3>
    <hr>
    <div class="container">
        @isset($visiMisi)
            <div class="text-justify">
                <div class="mb-4">
                    <h5 class="text-secondary">Visi SD Negeri 023 Balikpapan</h5>
                    <p class="text-capitalize"><i>"{!! $visiMisi->visi !!}"</i></p>
                </div>

                <div>
                    <h5 class="text-secondary">Misi SD Negeri 023 Balikpapan</h5>
                    <p class="">{!! $visiMisi->misi !!}</p>
                </div>
            </div>
        @endisset
        @empty($visiMisi)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
