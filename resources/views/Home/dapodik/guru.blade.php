@extends('Home.main')

@section('content')
    <h3 class="text-center text-secondary">Guru & Tendik</h3>
    <hr>
    <div class="container">
        @isset($dataGuru)
            <!-- table start -->
            <div class="table-responsive">
                <table class="table" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>JK</th>
                            <th>Tempat/Tgl. Lahir</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>JK</th>
                            <th>Tempat/Tgl. Lahir</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dataGuru as $guru)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="img-guru">
                                        <img class="rounded" src="{{ url('img/guru/' . $guru->img) }}">
                                    </div>
                                </td>
                                <td>{{ $guru->name }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->jenis_kelamin }}</td>
                                <td>{{ $guru->tempat_lahir . ', ' . $guru->tgl_lahir }}</td>
                                <td>{{ $guru->alamat }}</td>
                                <td>{{ $guru->jabatan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- table end -->
        @endisset

        @empty($dataGuru)
            <p class="text-center"><i>No Content!</i></p>
        @endempty
    </div>
@endsection
