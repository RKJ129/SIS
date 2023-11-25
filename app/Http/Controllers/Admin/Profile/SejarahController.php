<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sejarah\PostSejarahRequest;
use App\Models\Sejarah_Sekolah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $data = Sejarah_Sekolah::select('id', 'sejarah')->get();
        return view('admin.profile.sejarah.index', compact('data'));
    }

    public function create(PostSejarahRequest $request) {
        if(Sejarah_Sekolah::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!','error');
            return redirect()->back();
        }
        Sejarah_Sekolah::create($request->all());
        toast('Berhasil Menambahkan data!','success');
        return redirect()->back();
    }

    public function update(PostSejarahRequest $request, $id) {
        $data = Sejarah_Sekolah::findOrFail($id);
        $data->update($request->all());
        toast('Berhasil mengubah data!','info');
        return redirect()->back();
    }

    public function delete() {
        Sejarah_Sekolah::truncate();
        toast('Berhasil menghapus data!','warning');
        // Alert::toast('Berhasil menghapus data!', 'warning');
        return redirect()->back();
    }
}
