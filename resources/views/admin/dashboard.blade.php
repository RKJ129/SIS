@extends('admin.main')

@section('sidebar')
    @parent
@endsection

<!-- Main Content -->
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Content Row -->
        <div class="row">

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Guru</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guru }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-person fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Berita</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $berita }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Galeri
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $galeri }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-photo-film fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Biodata Sekolah</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @isset($biodataSekolah)
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama Sekolah</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->name }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">NPSN</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->npsn }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Akreditasi</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->akreditasi }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->status }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Alamat</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->alamat }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Negara</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->negara }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">No Telepon</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->no_tlpn }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">No Fax</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->no_fax }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>:</td>
                                        <td>{{ $biodataSekolah->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endisset
                        @empty($biodataSekolah)
                            <div class="text-center">
                                <i>Tidak ada data!</i>
                            </div>
                        @endempty
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Kepala Sekolah</h6>
                        {{-- <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img class="img-fluid rounded mb-2"
                            src="{{ isset($kepalaSekolah) ? url('img/kepsek/' . $kepalaSekolah->img) : url('img/kepsek/img_default.jpeg') }}">
                        <p class="text-center mb-0">
                            <strong>{{ isset($kepalaSekolah) ? $kepalaSekolah->name : '-' }}</strong>
                        </p>
                        <p class="text-center mb-0" style="font-size: 12px">Kepala Sekolah SD Negeri 023</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Struktur Organisasi</h6>
                    </div>
                    <div class="card-body">
                        @isset($strukturOrganisasi)
                            <img class="img-fluid" src="{{ url('img/struktur_organisasi/' . $strukturOrganisasi->img) }}">
                        @endisset
                        @empty($strukturOrganisasi)
                            <div class="text-center"><i>Tidak ada data!</i></div>
                        @endempty
                    </div>
                </div>

                <!-- Color System -->
                <!-- <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-primary text-white shadow">
                            <div class="card-body">
                                Primary
                                <div class="text-white-50 small">#4e73df</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                                Success
                                <div class="text-white-50 small">#1cc88a</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-info text-white shadow">
                            <div class="card-body">
                                Info
                                <div class="text-white-50 small">#36b9cc</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body">
                                Warning
                                <div class="text-white-50 small">#f6c23e</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-danger text-white shadow">
                            <div class="card-body">
                                Danger
                                <div class="text-white-50 small">#e74a3b</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-secondary text-white shadow">
                            <div class="card-body">
                                Secondary
                                <div class="text-white-50 small">#858796</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-light text-black shadow">
                            <div class="card-body">
                                Light
                                <div class="text-black-50 small">#f8f9fc</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-dark text-white shadow">
                            <div class="card-body">
                                Dark
                                <div class="text-white-50 small">#5a5c69</div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Logo</h6>
                    </div>
                    <div class="card-body">
                        @isset($logo)
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="{{ url('img/logoSekolah/' . $logo->img) }}">
                            </div>
                            <p>{!! $logo->description_logo !!}</p>
                        @endisset

                        @empty($logo)
                            <div class="text-center"><i>Tidak ada data!</i></div>
                        @endempty
                    </div>
                </div>

                <!-- Approach -->
                <!-- <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                    </div>
                    <div class="card-body">
                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                            CSS bloat and poor page performance. Custom CSS classes are used to create
                            custom components and custom utility classes.</p>
                        <p class="mb-0">Before working with this theme, you should become familiar with the
                            Bootstrap framework, especially the utility classes.</p>
                    </div>
                </div> -->

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
<!-- End of Main Content -->
