<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('assets/login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/bootstrap.min.css') }}"> --}}

    <!-- Style -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <title>Forgot Password</title>
</head>

<body>


    {{-- @extends('layouts.app', ['title' => 'Forgot Password - SantriKoding.com']) --}}

    {{-- @section('content') --}}
    <div class="container-fluid d-flex justify-content-center align-items-center mt-4">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $errors->first() }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('actionVerifikasiEmail') }}">
                        @csrf

                        <div class="form-group">
                            <label class="fs-5 fw-bolder text-uppercase">Email Address</label>
                            <input id="email" type="email"
                                class="form-control mb-2 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Masukkan Alamat Email">

                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary container-fluid">SUBMIT</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
    {{-- @endsection --}}


    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/login/js/jquery-3.3.1.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/login/js/popper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/login/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/login/js/main.js') }}"></script> --}}
</body>

</html>
