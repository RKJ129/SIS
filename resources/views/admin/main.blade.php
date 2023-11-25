<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SD NEGERI 023</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">

</head>

<body id="page-top">

    @include('sweetalert::alert')


    <!-- Page Wrapper -->
    <div id="wrapper">

        @section('sidebar')
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">SD NEGERI 023</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ Request::url() == route('admin.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.index') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Nav Item - user -->
                <li class="nav-item {{ request()->is('admin/users*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.users.index') }}">
                        <i class="fa-solid fa-user"></i>
                        <span>Users</span></a>
                </li>

                <!-- Heading -->
                <div class="sidebar-heading">
                    Profile
                </div>


                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item {{ request()->is('admin/profile*') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-house"></i>
                        <span>Profile</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item {{ Request::url() == route('admin.sejarah.index') ? 'active' : '' }}"
                                href="{{ route('admin.sejarah.index') }}">Sejarah Sekolah</a>
                            <a class="collapse-item {{ Request::url() == route('admin.kepsek.index') ? 'active' : '' }}"
                                href="{{ route('admin.kepsek.index') }}">Kepala Sekolah</a>
                            <a class="collapse-item {{ Request::url() == route('admin.strukturOrganisasi.index') ? 'active' : '' }}"
                                href="{{ route('admin.strukturOrganisasi.index') }}">Struktur Organisasi</a>
                            <a class="collapse-item {{ Request::url() == route('admin.visiMisi.index') ? 'active' : '' }}"
                                href="{{ route('admin.visiMisi.index') }}">Visi & Misi</a>
                            <a class="collapse-item {{ Request::url() == route('admin.logoMoto.index') ? 'active' : '' }}"
                                href="{{ route('admin.logoMoto.index') }}">Logo & Motto</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item {{ request()->is('admin/dapodik*') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa-solid fa-table"></i>
                        <span>Dapodik</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingBerita"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item {{ Request::url() == route('admin.biodataSekolah.index') ? 'active' : '' }}"
                                href="{{ route('admin.biodataSekolah.index') }}">Biodata Sekolah</a>
                            <a class="collapse-item {{ Request::url() == route('admin.daftarGuru.index') ? 'active' : '' }}"
                                href="{{ route('admin.daftarGuru.index') }}">Daftar Guru</a>
                            <a class="collapse-item {{ Request::url() == route('admin.saranaPrasarana.index') ? 'active' : '' }}"
                                href="{{ route('admin.saranaPrasarana.index') }}">Sarana & Prasarana</a>
                            {{-- <a class="collapse-item" href="utilities-other.html">Tata Tertib</a> --}}
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Tata Tertib -->
                <li class="nav-item {{ request()->is('admin/tata-tertib*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.tataTertib.index') }}">
                        {{-- <i class="fa-solid fa-scroll"></i> --}}
                        <i class="fa-solid fa-shapes"></i>
                        <span>Tata Tertib Sekolah</span></a>
                </li>

                <!-- Nav Item - Ekstrakurikuler -->
                <li class="nav-item {{ request()->is('admin/ekstrakurikuler*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.ekstrakurikuler.index') }}">
                        <i class="fa-solid fa-masks-theater"></i>
                        <span>Ekstrakurikuler</span></a>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item {{ request()->is('admin/berita*') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBerita"
                        aria-expanded="true" aria-controls="collapseBerita">
                        <i class="fa-solid fa-table"></i>
                        <span>Berita/Pengumuman</span>
                    </a>
                    <div id="collapseBerita" class="collapse" aria-labelledby="headingBerita"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item {{ request()->is('admin/berita/pendidikan*') ? 'active' : '' }}"
                                href="{{ route('admin.berita.pendidikan.index') }}">Pendidikan</a>
                            <a class="collapse-item {{ request()->is('admin/berita/kegiatan-sekolah*') ? 'active' : '' }}"
                                href="{{ route('admin.berita.kegiatanSekolah.index') }}">Kegiatan Sekolah</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item {{ request()->is('admin/galeri*') ? 'active' : '' }}">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleri"
                        aria-expanded="true" aria-controls="collapseBerita">
                        <i class="fa-solid fa-table"></i>
                        <span>Galeri</span>
                    </a>
                    <div id="collapseGaleri" class="collapse" aria-labelledby="headingGaleri"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item {{ request()->is('admin/galeri/foto*') ? 'active' : '' }}"
                                href="{{ route('admin.galeri.foto.index') }}">Foto</a>
                            <a class="collapse-item {{ request()->is('admin/galeri/video*') ? 'active' : '' }}"
                                href="{{ route('admin.galeri.video.index') }}">Video</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Ekstrakurikuler -->
                <li class="nav-item {{ request()->is('admin/prestasi*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.prestasi.index') }}">
                        <i class="fa-solid fa-masks-theater"></i>
                        <span>Prestasi</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
        @show

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- navbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ Auth::user()->img ? asset('img/users/' . Auth::user()->img) : asset('img/users/img_default.jpeg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                @yield('content')
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SD Negeri 023 Balikpapan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    {{-- <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('assets/admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo/chart-pie-demo.js') }}"></script> --}}

    <!-- bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });

        let table = new DataTable('#myTable');
    </script>
</body>

</html>
