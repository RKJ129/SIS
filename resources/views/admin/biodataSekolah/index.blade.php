@extends('admin.main')

@section('content')
    <div class="container-fluid">

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Biodata Sekolah</h1>
        </div>

        <!-- buttons -->

        @isset($data)
            <div class="mb-2 d-flex">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Ubah</button>
                {{-- <div class="mx-2">
                    @method('DELETE')
                    <a class="btn btn-sm btn-outline-danger" href="{{ route('admin.biodataSekolah.delete') }}"
                        data-confirm-delete="true">Reset</a>
                </div> --}}
            </div>
        @endisset
        {{-- @empty($data)
            <div class="mb-2">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createModal">Tambah</button>
            </div>
        @endempty --}}


        <!-- modal create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Input Biodata Sekolah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.biodataSekolah.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="name">Nama Sekolah :</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        value="{{ old('name') }}">
                                </div>

                                <div class="col-lg-6">
                                    <label for="npsn" class="form-label">NPSN :</label>
                                    <input type="number" class="form-control" name="npsn" id="npsn"
                                        value="{{ old('npsn') }}">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="akreditasi">Akreditasi :</label>
                                    <select class="form-select" name="akreditasi" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="A" {{ old('akreditasi') == 'A' ? 'selected' : '' }}>A</option>
                                        <option value="B" {{ old('akreditasi') == 'B' ? 'selected' : '' }}>B</option>
                                        <option value="C" {{ old('akreditasi') == 'C' ? 'selected' : '' }}>C</option>
                                        {{-- <option value="D" {{ old('akreditasi') == 'D' ? 'selected' : '' }}>D</option> --}}
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat Sekolah :</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="5">{{ old('alamat') }}</textarea>
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kode_pos">Kode Pos :</label>
                                    <input type="number" class="form-control" name="kode_pos" id="kode_pos"
                                        value="{{ old('kode_pos') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kelurahan">Kelurahan :</label>
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan"
                                        value="{{ old('kelurahan') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kecamatan">Kecamatan :</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                        value="{{ old('kecamatan') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kota">Kota :</label>
                                    <input type="text" class="form-control" name="kota" id="kota"
                                        value="{{ old('kota') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="provinsi">Provinsi :</label>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi"
                                        value="{{ old('provinsi') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="negara">Negara :</label>
                                    <input type="text" class="form-control" name="negara" id="negara"
                                        value="{{ old('negara') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email :</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="no_tlpn">No. Telepon :</label>
                                    <input type="tel" class="form-control" name="no_tlpn" id="no_tlpn"
                                        placeholder="Format : 08xx xxxx xxxx" pattern="[0][0-9]{3,4}[0-9]{3,4}[0-9]{3,4}"
                                        value="{{ old('no_tlpn') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="no_fax">No. Fax :</label>
                                    <input type="tel" class="form-control" name="no_fax" id="no_fax"
                                        placeholder="021 xxxxx" pattern="[0][1-9]{2} [0-9]{7,8,9,10}"
                                        value="{{ old('no_fax') }}">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- modal update -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Input Biodata Sekolah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ isset($data) ? route('admin.biodataSekolah.update', $data->id) : '' }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="name">Nama Sekolah :</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        value="{{ isset($data) ? $data->name : '', old('name') }}">
                                </div>

                                <div class="col-lg-6">
                                    <label for="npsn" class="form-label">NPSN :</label>
                                    <input type="number" class="form-control" name="npsn" id="npsn"
                                        value="{{ isset($data) ? $data->npsn : '', old('npsn') }}">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label" for="akreditasi">Akreditasi :</label>
                                    <select class="form-select" name="akreditasi" aria-label="Default select example">
                                        <option value="" selected></option>
                                        @isset($data)
                                            <option value="A"
                                                {{ old('akreditasi') == 'A' || $data->akreditasi == 'A' ? 'selected' : '' }}>A
                                            </option>
                                            <option value="B"
                                                {{ old('akreditasi') == 'B' || $data->akreditasi == 'B' ? 'selected' : '' }}>B
                                            </option>
                                            <option value="C"
                                                {{ old('akreditasi') == 'C' || $data->akreditasi == 'C' ? 'selected' : '' }}>C
                                            </option>
                                        @endisset
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat Sekolah :</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="5">{{ isset($data) ? $data->alamat : '', old('alamat') }}</textarea>
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kode_pos">Kode Pos :</label>
                                    <input type="number" class="form-control" name="kode_pos" id="kode_pos"
                                        value="{{ isset($data) ? $data->kode_pos : '', old('kode_pos') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kelurahan">Kelurahan :</label>
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan"
                                        value="{{ isset($data) ? $data->kelurahan : '', old('kelurahan') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kecamatan">Kecamatan :</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                        value="{{ isset($data) ? $data->kecamatan : '', old('kecamatan') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="kota">Kota :</label>
                                    <input type="text" class="form-control" name="kota" id="kota"
                                        value="{{ isset($data) ? $data->kota : '', old('kota') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="provinsi">Provinsi :</label>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi"
                                        value="{{ isset($data) ? $data->provinsi : '', old('provinsi') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="negara">Negara :</label>
                                    <input type="text" class="form-control" name="negara" id="negara"
                                        value="{{ isset($data) ? $data->negara : '', old('negara') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email :</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ isset($data) ? $data->email : '', old('email') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="no_tlpn">No. Telepon :</label>
                                    <input type="tel" class="form-control" name="no_tlpn" id="no_tlpn"
                                        value="{{ isset($data) ? $data->no_tlpn : '', old('no_tlpn') }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="no_fax">No. Fax :</label>
                                    <input type="tel" class="form-control" name="no_fax" id="no_fax"
                                        value="{{ isset($data) ? $data->no_fax : '', old('no_fax') }}">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- card Biodata Sekolah -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Biodata Sekolah SD Negeri 023</h6>
            </div>

            <div class="card-body">
                <div class="{{ isset($data) ? 'col-8' : 'col-12' }}">
                    <table class="table">
                        <tbody>
                            @isset($data)
                                <tr>
                                    <th scope="row">Nama Sekolah</th>
                                    <td>:</td>
                                    <td>{{ $data->name }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">NPSN</th>
                                    <td>:</td>
                                    <td>{{ $data->npsn }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Akreditasi</th>
                                    <td>:</td>
                                    <td>{{ $data->akreditasi }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Jenjang</th>
                                    <td>:</td>
                                    <td>{{ $data->jenjang }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Status</th>
                                    <td>:</td>
                                    <td>{{ $data->status }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td>{{ $data->alamat }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Kode Pos</th>
                                    <td>:</td>
                                    <td>{{ $data->kode_pos }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Kelurahan</th>
                                    <td>:</td>
                                    <td>{{ $data->kelurahan }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Kecamatan</th>
                                    <td>:</td>
                                    <td>{{ $data->kecamatan }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Kota</th>
                                    <td>:</td>
                                    <td>{{ $data->kota }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Provinsi</th>
                                    <td>:</td>
                                    <td>{{ $data->provinsi }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Negara</th>
                                    <td>:</td>
                                    <td>{{ $data->negara }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">No Telepon</th>
                                    <td>:</td>
                                    <td>{{ $data->no_tlpn }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">No Fax</th>
                                    <td>:</td>
                                    <td>{{ $data->no_fax }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Email</th>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                            @endisset

                            @empty($data)
                                <div class="text-center">
                                    <i>Tidak ada data!</i>
                                </div>
                            @endempty


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
