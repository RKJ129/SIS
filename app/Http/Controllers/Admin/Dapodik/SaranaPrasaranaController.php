<?php

namespace App\Http\Controllers\Admin\Dapodik;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaranaPrasaranaRequest;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;

class SaranaPrasaranaController extends Controller
{
    public function index() {
        $title = 'Konfirmasi!';
        $text = "Anda yakin ingin menghapus data ini?";
        confirmDelete($title, $text);

        $data = SaranaPrasarana::first();
        return view('admin.saranaPrasarana.index', compact('data'));
    }

    public function store(SaranaPrasaranaRequest $request) {
        if(SaranaPrasarana::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!!','error');
            return redirect()->back();
        }
        SaranaPrasarana::create($request->all());

        toast('Berhasil menambahkan data!','success');
        return redirect()->back();
    }

    public function update(SaranaPrasaranaRequest $request, $id) {
        $data = SaranaPrasarana::findOrFail($id);
        $data->update($request->all());

        toast('Berhasil mengubah data!','info');
        return redirect()->back();
    }

    public function delete() {
        SaranaPrasarana::truncate();

        toast('Berhasil menghapus data!','warning');
        return redirect()->back();
    }
}
