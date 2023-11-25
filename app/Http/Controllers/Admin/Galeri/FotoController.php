<?php

namespace App\Http\Controllers\Admin\Galeri;

use App\Http\Controllers\Controller;
use App\Http\Requests\FotoRequest;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FotoController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin ingin menghapus??";
        confirmDelete($title, $text);

        $datas = GaleriFoto::orderBy('id', 'asc')->get();
        // $page = GaleriFoto::paginate(1);
        return view('admin.galeri.foto.index', compact('datas'));
    }

    public function store(FotoRequest $request) {
        $img = $request->file('img');
        $path = [];
        foreach($img as $item) {
            $imgName = time() . '_' . $item->getClientOriginalName();
            $item->move('img/galeri/foto/', $imgName);
            $path[] = $imgName;
        }
        
        GaleriFoto::create([
            'judul' => $request->judul,
            'img' => json_encode($path),
        ]);
        
        toast('Berhasil menambahkan data!', 'success');
        return redirect()->back();
    }

    public function update(FotoRequest $request, $id) {
        $data = GaleriFoto::findOrFail($id);
        $path = [];
        foreach($request->file('img') as $item) {
            $imgName = time() . '_' . $item->getClientOriginalName();
            $item->move('img/galeri/foto/', $imgName);
            $path[] = $imgName;
        }

        foreach(json_decode($data->img) as $dataImage) {
            File::delete('img/galeri/foto/' . $dataImage);
        }

        $data->update([
            'judul' => $request->judul,
            'img' => json_encode($path),
        ]);

        toast('Berhasil mengubah data!', 'info');
        return redirect()->back();
    }

    public function delete($id) {
        $data = GaleriFoto::findOrFail($id);
        foreach(json_decode($data->img) as $dataImage) {
            File::delete('img/galeri/foto/' . $dataImage);
        }
        $data->delete();

        toast('Berhasil menghapus data!', 'warning');
        return redirect()->back();
    }

    public function truncate() {
        File::cleanDirectory('img/galeri/foto');
        GaleriFoto::truncate();

        toast('Berhasil Reset data!', 'warning');
        return redirect()->back();
    }
}
