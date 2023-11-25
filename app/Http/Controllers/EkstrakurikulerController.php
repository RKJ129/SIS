<?php

namespace App\Http\Controllers;

use App\Http\Requests\EkstrakurikulerRequest;
use App\Http\Requests\TataTertibRequest;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index() {
        $title = 'Konfirmasi!';
        $text = "Anda yakin ingin menghapus data ini?";
        confirmDelete($title, $text);

        $data = Ekstrakurikuler::first();
        return view('admin.ekstrakurikuler.index', compact('data'));
    }

    public function store(EkstrakurikulerRequest $request) {        
        if(Ekstrakurikuler::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!','error');
            return redirect()->back();
        }

        $tataTertib = Ekstrakurikuler::create($request->all());

        if(!$tataTertib) {
            alert()->error('Error','Gagal Menambahkan data!');
            return redirect()->back();
        } 

        toast('Berhasil menambahkan data!','success');
        return redirect()->back();
    }

    public function update(EkstrakurikulerRequest $request, $id) {
        $update = Ekstrakurikuler::findOrFail($id)
        ->update($request->all());

        if(!$update) {
            return redirect()->back()->withErrors(['error' => 'Gagal Mengubah data!']);
        }

        toast('Berhasil mengubah data!','info');
        return redirect()->back();
    }

    public function delete() {
        $delete = Ekstrakurikuler::truncate();

        if(!$delete) {
            return redirect()->back()->with(['error' => 'Gagal Menghapus data!']);
        }

        toast('Berhasil menghapus data!','warning');
        return redirect()->back();
    }
}
