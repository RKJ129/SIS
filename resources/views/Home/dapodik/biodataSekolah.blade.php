@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Biodata Sekolah</h3>
    <hr>
    <div class="container">
        @isset($biodataSekolah)
        <div class="{{ isset($biodataSekolah) ? 'col-12' : 'col-12' }}">
            <table class="table">
                <tbody>
                    @isset($biodataSekolah)
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
                            <th scope="row">Jenjang</th>
                            <td>:</td>
                            <td>{{ $biodataSekolah->jenjang }}</td>
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
                            <th scope="row">Kode Pos</th>
                            <td>:</td>
                            <td>{{ $biodataSekolah->kode_pos }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Kelurahan</th>
                            <td>:</td>
                            <td>{{ $biodataSekolah->kelurahan }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Kecamatan</th>
                            <td>:</td>
                            <td>{{ $biodataSekolah->kecamatan }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Kota</th>
                            <td>:</td>
                            <td>{{ $biodataSekolah->kota }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Provinsi</th>
                            <td>:</td>
                            <td>{{ $biodataSekolah->provinsi }}</td>
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
                    @endisset

                    @empty($biodataSekolah)
                        <div class="text-center">
                            <i>Tidak ada data!</i>
                        </div>
                    @endempty


                </tbody>
            </table>

        </div>
        @endisset

        @empty($biodataSekolah)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection