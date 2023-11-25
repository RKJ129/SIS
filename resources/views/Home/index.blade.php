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
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/fonts/feather/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

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

    <div class="container">
        <nav class="site-nav">
            <div class="logo">
                <a href="{{ route('home.index') }}" class="text-white text-decoration-none">SD Negeri 023<span
                        class="text-black"></span></a>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center bg-danger rounded p-1">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu text-danger">
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                href="{{ route('home.index') }}">Home</a></li>
                        <li class="has-children">
                            <a class="{{ request()->is('profile*') ? 'text-light' : '' }}">Profile</a>
                            <ul class="dropdown">
                                <li class="{{ Request::url() == route('home.profile.sejarah') ? 'active' : '' }}"><a
                                        class="text-decoration-none" href="{{ route('home.profile.sejarah') }}">Sejarah
                                        Singkat</a></li>
                                <li
                                    class="{{ Request::url() == route('home.profile.kepalaSekolah') ? 'active' : '' }}">
                                    <a class="text-decoration-none"
                                        href="{{ route('home.profile.kepalaSekolah') }}">Kepala Sekolah</a>
                                </li>
                                <li
                                    class="{{ Request::url() == route('home.profile.strukturOrganisasi') ? 'active' : '' }}">
                                    <a class="text-decoration-none"
                                        href="{{ route('home.profile.strukturOrganisasi') }}">Struktur Organisasi</a>
                                </li>
                                <li class="{{ Request::url() == route('home.profile.visiMisi') ? 'active' : '' }}"><a
                                        class="text-decoration-none" href="{{ route('home.profile.visiMisi') }}">Visi &
                                        Misi</a></li>
                                <li class="{{ Request::url() == route('home.profile.logoMotto') ? 'active' : '' }}"><a
                                        class="text-decoration-none" href="{{ route('home.profile.logoMotto') }}">Logo
                                        & Motto</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a class="{{ request()->is('dapodik*') ? 'text-light' : '' }}" href="#">Dapodik</a>
                            <ul class="dropdown">
                                <li
                                    class="{{ Request::url() == route('home.dapodik.biodataSekolah') ? 'active' : '' }}">
                                    <a class="text-decoration-none"
                                        href="{{ route('home.dapodik.biodataSekolah') }}">Biodata Sekolah</a>
                                </li>
                                <li class="{{ Request::url() == route('home.dapodik.guruTendik') ? 'active' : '' }}"><a
                                        class="text-decoration-none"
                                        href="{{ route('home.dapodik.guruTendik') }}">Daftar Guru & Tendik</a></li>
                                <li
                                    class="{{ Request::url() == route('home.dapodik.saranaPrasarana') ? 'active' : '' }}">
                                    <a class="text-decoration-none"
                                        href="{{ route('home.dapodik.saranaPrasarana') }}">Sarana & Prasarana</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::url() == route('home.tataTertib') ? 'active' : '' }}"><a
                                href="{{ route('home.tataTertib') }}">Tata Tertib</a></li>
                        <li class="{{ Request::url() == route('home.ekstrakurikuler') ? 'active' : '' }}"><a
                                href="{{ route('home.ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                        <li class="has-children">
                            <a class="{{ request()->is('berita*') ? 'text-light' : '' }}"
                                href="#">Berita/Pengumuman</a>
                            <ul class="dropdown">
                                <li class="{{ Request::url() == route('home.berita.pendidikan') ? 'active' : '' }}"><a
                                        class="text-decoration-none"
                                        href="{{ route('home.berita.pendidikan') }}">Pendidikan</a></li>
                                <li
                                    class="{{ Request::url() == route('home.berita.kegiatanSekolah') ? 'active' : '' }}">
                                    <a class="text-decoration-none"
                                        href="{{ route('home.berita.kegiatanSekolah') }}">Kegiatan Sekolah</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a class="{{ request()->is('galeri*') ? 'text-light' : '' }}" href="#">Galeri</a>
                            <ul class="dropdown">
                                <li class="{{ Request::url() == route('home.galeri.galeriFoto') ? 'active' : '' }}"><a
                                        class="text-decoration-none"
                                        href="{{ route('home.galeri.galeriFoto') }}">Koleksi Foto</a></li>
                                <li class="{{ Request::url() == route('home.galeri.galeriVideo') ? 'active' : '' }}">
                                    <a class="text-decoration-none"
                                        href="{{ route('home.galeri.galeriVideo') }}">Koleksi Video</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="{{ Request::url() == route('home.prestasi') ? 'text-light' : '' }}"
                                href="{{ route('home.prestasi') }}">Prestasi</a></li>
                    </ul>

                    <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>

            </div>
        </nav>

        {{-- <nav class="site-nav bg-info p-2 mt-2 rounded">
        <div class="logo">
          <a href="{{ route('home.index') }}" class="text-white text-decoration-none">SD Negeri 023<span class="text-black">.</span></a>
        </div>
        <div class="row align-items-center">
          
          
          
          <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
              <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
              <li class="has-children">
                <a>Profil</a>
                <ul class="dropdown">
                  <li><a href="{{ route('home.profile.sejarah') }}">Sejarah Singkat</a></li>
                  <li><a href="{{ route('home.profile.kepalaSekolah') }}">Kepala Sekolah</a></li>
                  <li><a href="{{ route('home.profile.strukturOrganisasi') }}">Struktur Organisasi</a></li>
                  <li><a href="{{ route('home.profile.visiMisi') }}">Visi & Misi</a></li>
                  <li><a href="{{ route('home.profile.logoMotto') }}">Logo & Motto</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="#">Dapodik</a>
                <ul class="dropdown">
                  <li><a href="portfolio.html">Biodata Sekolah</a></li>
                  <li><a href="single.html">Daftar Guru & Tendik</a></li>
                  <li><a href="about.html">Sarana & Prasarana</a></li>
                </ul>
              </li>
              <li><a href="elements.html">Tata Tertib Sekolah</a></li>
              <li><a href="elements.html">Ekstrakurikuler</a></li>
              <li class="has-children">
                <a href="#">Berita/Pengumuman</a>
                <ul class="dropdown">
                  <li><a href="portfolio.html">Pendidikan</a></li>
                  <li><a href="single.html">Kegiatan Sekolah</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="#">Galeri</a>
                <ul class="dropdown">
                  <li><a href="portfolio.html">Koleksi Foto</a></li>
                  <li><a href="single.html">Koleksi Video</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Prestasi</a></li>
            </ul>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right menu-absolute">
              <li class="cta-button"><a href="https://untree.co/" target="_blank">Free Templates</a></li>
            </ul>

            <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>

          </div>

        </div>  
      </nav> <!-- END nav --> --}}

    </div> <!-- END container -->


    <div class="hero-slant overlay" data-stellar-background-ratio="0.5"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('home/images/img-5.jpg') }}');">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 intro">
                    <h1 class="text-white font-weight-bold mb-4 text-uppercase" data-aos="fade-up"
                        data-aos-delay="0">Selamat <span class="text-primary">datang!</span></h1>
                    <p class="text-white mb-4 text-capitalize" data-aos="fade-up" data-aos-delay="100">Kami hadir
                        untuk memberikan
                        pendidikan berkualitas dan mengembangkan potensi siswa. Selalu kunjungi situs kami untuk
                        informasi terbaru dan prestasi sekolah.</p>
                    <a class="btn btn-lg btn-danger text-uppercase sc" href="#content">Jelajahi</a>
                </div>
            </div>


        </div>

        {{-- <div class="slant" style="background-image: url('{{ asset('home/images/slant-grey.svg') }}');"></div> --}}
    </div>

    {{-- <div class="row">
      <div class="col-4">
        <div class="map"><i class="fa-solid fa-location-dot"></i></div>
        <div class="location"></div>
      </div>
      <div class="col-4"></div>
      <div class="col-4"></div>
    </div> --}}

    <div class="card shadow mb-4 mx-2" id="content">
        <div class="card-body">
            <div class="row mx-2">
                <div class="col-8">
                    <div class="news">
                        <div class="head mb-2">
                            <i class="fa-regular fa-newspaper fa-lg"></i>
                            <span class="mx-2">Berita Terkini</span>
                        </div>
                        <div class="content mb-3">
                            @if (count($berita) > 0)
                                @foreach ($berita as $item)
                                    <div class="row mb-4">
                                        <div class="col-5">
                                            <div class="rounded img"
                                                style="background-image: url('{{ $item->kategori == 'pendidikan' ? asset('img/berita/pendidikan/' . $item->img) : asset('img/berita/kegiatan-sekolah/' . $item->img) }}')">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="title"><a class=""
                                                    href="{{ route('home.berita.detaiBerita', $item->id) }}">{{ $item->judul }}</a>
                                            </div>
                                            <div class="date-category">{{ $item->created_at->format('M, d Y') }} |
                                                <span class="text-capitalize">{{ $item->kategori }}</span>
                                            </div>
                                            <div class="text-news">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Voluptates magni vitae pariatur quia. Odio non nulla voluptatum pariatur
                                                debitis
                                                sit praesentium ipsam, reprehenderit fugit quibusdam mollitia corporis
                                                quod
                                                doloremque facilis maiores, delectus quidem aperiam officia numquam
                                                totam,
                                                aut
                                                commodi? Autem illo distinctio nostrum veniam delectus aspernatur
                                                recusandae
                                                similique numquam eum?</div>
                                            <div class="text-link"><a
                                                    href="{{ route('home.berita.detaiBerita', $item->id) }}">Baca
                                                    Selengkapnya
                                                    <span><i class="fa-solid fa-chevron-right fa-xs"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center"><i>No Content!</i></div>
                            @endif
                        </div>
                    </div>

                    @if(count($galeriFoto) > 0)
                      <div class="galeri mb-4">
                          <div class="head mb-2">
                              <i class="fa-regular fa-images fa-lg"></i>
                              <span class="mx-2">Koleksi Foto</span>
                          </div>

                          <div class="galeri-content">
                              <div class="row">
                                  @foreach ($galeriFoto as $item)
                                      <div class="col-6">
                                          <div class="image"
                                              style="background-image: url({{ asset('img/galeri/foto/' . json_decode($item->img)[0]) }})">
                                              hdue</div>
                                          <div class="my-1 title-galeri">
                                              {{ $item->judul }}
                                          </div>
                                          <a class="btn btn-block btn-primary"
                                              href="{{ route('home.galeri.detailFoto', $item->id) }}"><i
                                                  class="fa-solid fa-magnifying-glass"></i><span
                                                  class="mx-2">Lihat</span></a>
                                      </div>
                                   @endforeach
                              </div>
                          </div>
                      </div>
                    @endif

                    @if(count($galeriVideo) > 0)
                      <div class="galeri">
                          <div class="head mb-2">
                              <i class="fa-solid fa-video fa-lg"></i>
                              <span class="mx-2">Koleksi Video</span>
                          </div>

                          <div class="video-content">
                              <div class="row h-100">
                                  @foreach ($galeriVideo as $item)
                                      <div class="col-6">
                                          <video width="100%" height="100%" controls>
                                              <source class=""
                                                  src="{{ asset('img/galeri/video/' . $item->video) }}"
                                                  type="video/mp4">
                                          </video>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                    @endif

                </div>
                <div class="col-4">
                    <div class="container col-12 mt-5">
                        <img class="img-fluid"
                            src="{{ $kepalaSekolah ? asset('img/kepsek/' . $kepalaSekolah->img) : asset('img/kepsek/img_default.jpeg') }}"
                            alt="">
                        <div class="headmaster-name mt-1">
                            {{ $kepalaSekolah ? $kepalaSekolah->name : '-' }}
                        </div>
                        <div class="position">-Kepala Sekolah SD Negeri 023-</div>
                    </div>

                    <div class="mt-4">
                        <div class="mb-3 post-title">Post Terkini</div>
                        @if (count($berita) > 0)
                            @foreach ($berita as $news)
                                <div class="mb-1">
                                    <a class="news-latest"
                                        href="{{ route('home.berita.detaiBerita', $news->id) }}">{{ $news->judul }}</a>
                                    <hr>
                                </div>
                            @endforeach
                          @else
                          <div class="text-center"><i>No Content!</i></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="site-footer">
        <div class="container">
            <div class="row justify-content-center text-center copyright">
                <div class="col-md-12">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. 
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

   


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/aos.js') }}"></script>
    <script src="{{ asset('home/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('home/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('home/js/custom.js') }}"></script>


</body>

</html>
