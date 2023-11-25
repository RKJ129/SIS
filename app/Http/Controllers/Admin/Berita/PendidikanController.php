<?php

namespace App\Http\Controllers\Admin\Berita;

use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PendidikanController extends Controller
{
    public function index()
    {
        $data = Berita::where('kategori', 'pendidikan')->get();
        return view('admin.berita.pendidikan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(BeritaRequest $request)
    {
        $imgName = time() . '_' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('img/berita/pendidikan/', $imgName);

        Berita::create(array_merge($request->except('img'), [
            'img' => $imgName,
            'kategori' => 'pendidikan',
        ]));

        toast('Berhasil menambahkan data!', 'success');
        return redirect()->back();
    }

    public function update(BeritaRequest $request, $id)
    {
        $imgName = time() . '_' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('img/berita/pendidikan/', $imgName);

        $data = Berita::findOrFail($id);

        File::delete('img/berita/pendidikan/' . $data->img);

        $data->update(array_merge($request->except('img'), [
            'img' => $imgName,
            'kategori' => 'pendidikan'
        ]));

        toast('Berhasil mengubah data!', 'info');
        return redirect()->back();
    }

    public function delete($id) {
        $data = Berita::findOrFail($id);
        $data->delete();

        File::delete('img/berita/pendidikan/' . $data->img);

        toast('Berhasil menghapus data!', 'warning');
        return redirect()->back();
    }
}
