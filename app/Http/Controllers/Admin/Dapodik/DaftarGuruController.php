<?php

namespace App\Http\Controllers\Admin\Dapodik;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guru\PostGuruRequest;
use App\Http\Requests\Guru\UpdateGuruRequest;
use App\Http\Requests\Guru\UpdateImageGuruRequest;
use App\Models\Guru;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class DaftarGuruController extends Controller
{
    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $dataGuru = Guru::all();
        return view('admin.daftarGuru.index', compact('dataGuru'));
    }

    public function create() {
        return view('admin.daftarGuru.create');
    }

    public function store(PostGuruRequest $request) { 
        $img = $request->file('img');
        $imgName = time() . '_' . $img->getClientOriginalName();

        $img->move('img/guru/', $imgName);

        Guru::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'img' => $imgName,
        ]);

        toast('Berhasil Menambahkan data!','success');
        return redirect()->route('admin.daftarGuru.index');
    }

    public function edit($id) {
        $dataGuru = Guru::findOrFail($id);
        return view('admin.daftarGuru.edit', compact('dataGuru'));
    }

    public function update(UpdateGuruRequest $request, $id) {
        $data = Guru::findOrFail($id);

        $data->update($request->all());
        toast('Berhasil mengubah data!','info');
        return redirect()->route('admin.daftarGuru.index');

    }

    public function updateImage(UpdateImageGuruRequest $request, $id) {
        $data = Guru::findOrFail($id);
         if($request->hasFile('img')) {
            $img = time() . '' . $request->file('img')->getClientOriginalName();
            File::delete('img/guru/' . $data->img);
            $request->file('img')->move('img/guru/',  $img);
            $data->update(['img' => $img]);
        }

        toast('Berhasil mengubah foto!','info');
        return redirect()->back();
    }

    public function destroy($id) {
        $data = Guru::findOrFail($id);

        File::delete('img/guru/' . $data->img);
        $data->delete();

        toast('Berhasil menghapus data!','warning');
        return redirect()->route('admin.daftarGuru.index');
    }
}
