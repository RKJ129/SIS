<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrestasiRequest;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{
    public function index() {
        $data = Prestasi::orderBy('id', 'desc')->get();
        return view('admin.prestasi.index', compact('data'));
    }

    public function store(PrestasiRequest $request) {
        $img = time() . '_' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move('img/prestasi/', $img);
        Prestasi::create($request->except('img') + ['img' => $img]);

        toast('Berhasil menambahkan data!', 'success');
        return redirect()->back();
    }

    public function update(PrestasiRequest $request, $id) {
        $data = Prestasi::findOrFail($id);
        $img = time() . '_' . $request->file('img')->getClientOriginalName();
        File::delete('img/prestasi/' . $data->img);
        $request->file('img')->move('img/prestasi/', $img);
        $data->update($request->except('img') + ['img' => $img]);

        toast('Berhasil mengubah data!', 'info');
        return redirect()->back();
    } 

    public function delete($id) {
        $data = Prestasi::findOrFail($id);
        File::delete('img/prestasi/' . $data->img);
        $data->delete();

        toast('Berhasil menghapus data!', 'warning');
        return redirect()->back();
    }
}
