<?php

namespace App\Http\Controllers;

use App\Http\Requests\TataTertibRequest;
use App\Models\TataTertib;
use Illuminate\Http\Request;

class TataTertibController extends Controller
{
    public function index() {
        $title = 'Konfirmasi!';
        $text = "Anda yakin ingin menghapus data ini?";
        confirmDelete($title, $text);

        $data = TataTertib::first();
        return view('admin.tataTertib.index', compact('data'));
    }

    public function store(TataTertibRequest $request) {        
        if(TataTertib::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!','error');
            return redirect()->back();
        }

        $tataTertib = TataTertib::create($request->all());

        if(!$tataTertib) {
            alert()->error('Error','Gagal Menambahkan data!');
            return redirect()->back();
        } 

        toast('Berhasil menambahkan data!','success');
        return redirect()->back();
    }

    public function update(TataTertibRequest $request, $id) {
        $update = TataTertib::findOrFail($id)
        ->update($request->all());

        if(!$update) {
            return redirect()->back()->withErrors(['error' => 'Gagal Mengubah data!']);
        }

        toast('Berhasil mengubah data!','info');
        return redirect()->back();
    }

    public function delete() {
        $delete = TataTertib::truncate();

        if(!$delete) {
            return redirect()->back()->with(['error' => 'Gagal Menghapus data!']);
        }

        toast('Berhasil menghapus data!','warning');
        return redirect()->back();
    }
}
