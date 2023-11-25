<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StrukturOrganisasiRequest;
use App\Models\Struktur_Organisasi;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index() {

        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $data = Struktur_Organisasi::first();
        return view('admin.strukturOrganisasi.index', compact('data'));
    }

    public function store(StrukturOrganisasiRequest $request) {

        if(Struktur_Organisasi::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!!','error');
            return redirect()->back();
        }

        $img = $request->file('img');
        $imgName = time(). '_' . $img->getClientOriginalName();

        $img->move('img/struktur_organisasi/', $imgName);

        Struktur_Organisasi::create([
            'img' => $imgName,
        ]);

        toast('Berhasil menambahkan data!!','success');

        return redirect()->back();
    }

    public function deleteImage($path, $name) {
        return File::delete($path . $name);
    }

    public function update(Request $request, $id) {

        $data = Struktur_Organisasi::find($id);

        $request->validate([
            'img' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);
        $img = $request->file('img');
        $imgName = time() . '_' . $img->getClientOriginalName();
       
        File::delete('img/struktur_organisasi/' . $data->img);
        $img->move('img/struktur_organisasi/', $imgName);

        $data->update([
            'img' => $imgName,
        ]);

        toast('Berhasil mengubah data!!','info');
    
        return redirect()->back();

    }

    public function delete($id) {
        $data = Struktur_Organisasi::findOrFail($id);
        $delete = $data->delete();

        if($delete) {
            File::delete('img/struktur_organisasi/' . $data->img);
        }

        toast('Berhasil menghapus data!!','warning');

        return redirect()->back();
    }
}
