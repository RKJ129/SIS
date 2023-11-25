<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\KepalaSekolahRequest;
use App\Http\Requests\PostKepalaSekolahRequest;
use App\Models\Kepala_Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KepalaSekolahController extends Controller
{
    public function index()
    {

        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $data = Kepala_Sekolah::first();
        return view('admin.kepalaSekolah.index', compact('data'));
    }

    public function store(PostKepalaSekolahRequest $request)
    {
        if(Kepala_Sekolah::count() > 0) {
            alert()->warning('Gagal!','Tidak bisa menambahkan data lagi!');
            return redirect()->back();
        }

        // menyimpan file
        $img = $request->file('img');

        $imgName = time() . '.' . $img->getClientOriginalName();
        $img->move('img/kepsek/', $imgName);

        // input ke database
        Kepala_Sekolah::create([
            'name' => $request->name,
            'img' => $imgName,
            'description' => $request->description,
        ]);

        toast('Berhasil Menambahkan data!','success');

        return redirect()->back();
    }

    public function update(KepalaSekolahRequest $request, $id)
    {
        $data = Kepala_Sekolah::findOrFail($id);
        
        if($request->has('img')) {
            // menyimpan file
            $img = $request->file('img');
    
            $imgName = time() . '.' . $img->getClientOriginalName();
            $img->move('img/kepsek/', $imgName);
    
            // hapus file
            File::delete('img/kepsek/' . $data->img);

            $data->update([
                'name' => $request->name,
                'img' => $imgName,
                'description' => $request->description,
            ]);
        } else {
            $data->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }


        toast('Berhasil mengubah data!','info');

        return redirect()->back();
    }

    public function delete($id) {
        $data = Kepala_Sekolah::findOrFail($id);
        // hapus file
        File::delete('img/kepsek/' . $data->img);

        // hapus data di database
        $data->delete();
        toast('Berhasil menghapus data!','warning');
        return redirect()->back();
    }
}
