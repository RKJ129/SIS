<!-- /*
* Template Name: Append
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('home/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{ asset('home/fonts/feather/style.css')}}">
  <link rel="stylesheet" href="{{ asset('home/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('home/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('home/css/aos.css')}}">
  <link rel="stylesheet" href="{{ asset('home/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">

  <title>Append Free HTML Template by Untree.co</title>
</head>
<body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="container" >


      <nav class="site-nav">
        <div class="logo">
          <a href="{{ route('home.index') }}" class="text-white text-decoration-none">SD Negeri 023<span class="text-black"></span></a>
        </div>
        <div class="row align-items-center">
          
          
          <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center bg-danger rounded p-1">
            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu text-danger">
              <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home.index') }}">Home</a></li>
              <li class="has-children">
                <a class="{{ request()->is('profile*') ? 'text-light' : '' }}">Profile</a>
                <ul class="dropdown">
                  <li class="{{ Request::url() == route('home.profile.sejarah') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.profile.sejarah') }}">Sejarah Singkat</a></li>
                  <li class="{{ Request::url() == route('home.profile.kepalaSekolah') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.profile.kepalaSekolah') }}">Kepala Sekolah</a></li>
                  <li class="{{ Request::url() == route('home.profile.strukturOrganisasi') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.profile.strukturOrganisasi') }}">Struktur Organisasi</a></li>
                  <li class="{{ Request::url() == route('home.profile.visiMisi') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.profile.visiMisi') }}">Visi & Misi</a></li>
                  <li class="{{ Request::url() == route('home.profile.logoMotto') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.profile.logoMotto') }}">Logo & Motto</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a class="{{ request()->is('dapodik*') ? 'text-light' : '' }}" href="#">Dapodik</a>
                <ul class="dropdown">
                  <li class="{{ Request::url() == route('home.dapodik.biodataSekolah') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.dapodik.biodataSekolah') }}">Biodata Sekolah</a></li>
                  <li class="{{ Request::url() == route('home.dapodik.guruTendik') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.dapodik.guruTendik') }}">Daftar Guru & Tendik</a></li>
                  <li class="{{ Request::url() == route('home.dapodik.saranaPrasarana') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.dapodik.saranaPrasarana') }}">Sarana & Prasarana</a></li>
                </ul>
              </li>
              <li class="{{ Request::url() == route('home.tataTertib') ? 'active' : '' }}"><a href="{{ route('home.tataTertib') }}">Tata Tertib</a></li>
              <li class="{{ Request::url() == route('home.ekstrakurikuler') ? 'active' : '' }}"><a href="{{ route('home.ekstrakurikuler') }}">Ekstrakurikuler</a></li>
              <li class="has-children">
                <a class="{{ request()->is('berita*') ? 'text-light' : '' }}" href="#">Berita/Pengumuman</a>
                <ul class="dropdown">
                  <li class="{{ Request::url() == route('home.berita.pendidikan') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.berita.pendidikan') }}">Pendidikan</a></li>
                  <li class="{{ Request::url() == route('home.berita.kegiatanSekolah') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.berita.kegiatanSekolah') }}">Kegiatan Sekolah</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a class="{{ request()->is('galeri*') ? 'text-light' : '' }}" href="#">Galeri</a>
                <ul class="dropdown">
                  <li class="{{ Request::url() == route('home.galeri.galeriFoto') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.galeri.galeriFoto') }}">Koleksi Foto</a></li>
                  <li class="{{ Request::url() == route('home.galeri.galeriVideo') ? 'active' : '' }}"><a class="text-decoration-none" href="{{ route('home.galeri.galeriVideo') }}">Koleksi Video</a></li>
                </ul>
              </li>
              <li><a class="{{ Request::url() == route('home.prestasi') ? 'text-light' : '' }}" href="{{ route('home.prestasi') }}">Prestasi</a></li>
            </ul>

            <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>

          </div>

        </div>  
      </nav> <!-- END nav -->

    </div> <!-- END container -->


    {{-- <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset('home/images/img-3.jpg') }}')">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 intro">
            <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">We turn ideas into extraordinary digital products</h1>
            <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control" placeholder="Enter email address">
              <input type="submit" class="btn btn-primary" value="Sign up">
            </form>
          
          </div>
          
          
        </div>

        
      </div>

      <div class="slant" style="background-image: url('{{ asset('home/images/slant-grey.svg') }}');"></div>
    </div> --}}

    {{-- <div class="py-3">
      <div class="container">

        <div class="owl-logos owl-carousel">
          <div class="item">
            <img src="images/logo-puma.png" alt="Image" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/logo-adobe.png" alt="Image" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/logo-google.png" alt="Image" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/logo-paypal.png" alt="Image" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/logo-adobe.png" alt="Image" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/logo-google.png" alt="Image" class="img-fluid">
          </div>
          

        </div>
        
            
      </div>
      
    </div> --}}

    
     <div class="site-section">
        <div class="text-secondary">
            @yield('content')

        </div>
    </div>    

     <div class="site-footer text-dark position-relative mb-0">
      <!-- <div class="container"> -->
        <div class="row justify-content-center text-center p-4 copyright">
          <div class="col-md-8">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      <!-- </div> -->
    </div>
    

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('home/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{ asset('home/js/popper.min.js')}}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('home/js/aos.js')}}"></script>
    <script src="{{ asset('home/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{ asset('home/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('home/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('home/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('home/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('home/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('home/js/custom.js')}}"></script>

    <script>
      let table = new DataTable('#myTable');
  </script>
    
  </body>
  </html>
