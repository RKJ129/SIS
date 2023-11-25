<!-- modal update -->
                <div class="modal fade" id="updateModal{{ $guru->id }}" tabindex="-1" aria-labelledby="updateModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update Data Guru</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.daftarGuru.update', $guru->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @foreach ($dataGuru as $data)
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama :</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    value="{{ old('name', $data->name) }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="nip" class="form-label">NIP :</label>
                                                <input type="text" class="form-control" name="nip"
                                                    id="nip" value="{{ old('nip', $data->nip) }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                                                <select class="form-select" name="jenis_kelamin" class="form-control"
                                                    aria-label="Default select example">
                                                    <option selected></option>
                                                    <option value="L" {{ (old('jenis_kelamin') ?? $data->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                                    <option value="P" {{ (old('jenis_kelamin') ?? $data->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                                                <input type="text" class="form-control" name="tempat_lahir"
                                                    id="tempat_lahir" value="{{ old('tempat_lahir', $data->tempat_lahir) }}">
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="tgl_lahir" class="form-label">Tanggal Lahir :</label>
                                                <input type="date" class="form-control" name="tgl_lahir"
                                                    id="tgl_lahir" value="{{ old('tgl_lahir', $data->tgl_lahir) }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="jabatan" class="form-label">Jabatan :</label>
                                                <select class="form-select" name="jabatan" aria-label="Default select example">
                                                    <option selected></option>
                                                    <option value="Guru" {{ old('jabatan') ?? $data->jabatan == 'Guru' ? 'selected' : ''  }}>Guru</option>
                                                    <option value="Tendik" {{ old('jabatan') ?? $data->jabatan == 'Tendik' ? 'selected' : ''  }}>Tendik</option>
                                                  </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat :</label>
                                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{ old('alamat', $data->alamat) }}</textarea>
                                            </div>

                                            {{-- <div class="mb-3">
                                                <label for="img" class="form-label">Foto :</label>
                                                <input type="file" class="form-control" name="img" id="img"
                                                    accept="image/png, image/jpeg, image/jpg, image/svg+xml">
                                                <small class="text-danger">*Wajib diisi*</small>
                                            </div> --}}

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary open_modal"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </form>
                            </div>

                        </div>
                    </div>
                </div>