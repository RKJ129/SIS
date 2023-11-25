<!-- modal create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Input Guru/Tendik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.daftarGuru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama :</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Masukkan nama" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP :</label>
                            <input type="number" class="form-control" name="nip" id="nip"
                                placeholder="Masukkan NIP" value="{{ old('nip') }}">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                            <select class="form-select" name="jenis_kelamin" class="form-control"
                                aria-label="Default select example">
                                <option selected></option>
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-Laki
                                </option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                placeholder="Masukkan tempat lahir" value="{{ old('tempat_lahir') }}">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir :</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"
                                value="{{ old('tgl_lahir') }}">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat :</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"
                                placeholder="Masukkan alamat">{{ old('alamat') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan :</label>
                            <select class="form-select" name="jabatan" aria-label="Default select example">
                                <option selected></option>
                                <option value="Guru" {{ old('jabatan') == 'Guru' ? 'selected' : '' }}>Guru</option>
                                <option value="Tendik" {{ old('jabatan') == 'Tendik' ? 'selected' : '' }}>Tendik</option>
                            </select>
                            {{-- <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Masukkan jabatan" value="{{ old('jabatan') }}"> --}}
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Foto :</label>
                            <input type="file" class="form-control" name="img" id="img"
                                accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
