<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisiMisiRequest;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index() {

        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $data = VisiMisi::first();
        return view('admin.visi&misi.index', compact('data'));
    }

    public function store(VisiMisiRequest $request) {
        if(VisiMisi::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!','error');
            return redirect()->back();
        }
        VisiMisi::create($request->all());
        toast('Berhasil menambahkan data!','success');
        return redirect()->back();
    }

    public function update(VisiMisiRequest $request, $id) {
        $data = VisiMisi::findOrFail($id);
        $data->update($request->all());
        toast('Berhasil mengubah data!','info');
        return redirect()->back();
    }

    public function delete() {
        VisiMisi::truncate();
        return redirect()->back();
    }
}
