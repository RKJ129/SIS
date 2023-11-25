<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">

    <title>Login #2</title>
</head>

<body>
    @include('sweetalert::alert')

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url('{{ asset('assets/login/images/bg_4.jpeg') }}');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login to <strong>SIS</strong></h3>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first() }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route('authenticate') }}" method="POST">
                            @csrf
                            <div class="form-group first">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" name="name" placeholder="Username"
                                    id="name">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    id="password" min="8">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" name="remember" checked="checked" value="1" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="{{ route('verifikasiEmail') }}"
                                        class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary"
                                style="background-color: #4e73df">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="{{ asset('assets/login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/main.js') }}"></script>
</body>

</html>
