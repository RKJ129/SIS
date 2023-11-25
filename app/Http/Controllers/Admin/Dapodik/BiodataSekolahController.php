<?php

namespace App\Http\Controllers\Admin\Dapodik;

use App\Http\Controllers\Controller;
use App\Http\Requests\BiodataSekolahRequest;
use App\Http\Requests\PostBiodataRequest;
use App\Models\Biodata_Sekolah;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;

class BiodataSekolahController extends Controller
{
    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        
        $data = Biodata_Sekolah::first();
        return view('admin.biodataSekolah.index', compact('data'));
    }

    public function store(BiodataSekolahRequest $request) {
        if(Biodata_Sekolah::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!','error');
            return redirect()->back();
        }
        Biodata_Sekolah::create($request->all() + ['jenjang' => 'SD', 'status' => 'Negeri']);
        toast('Berhasil Menambahkan data!','success');
        return redirect()->back();
    }

    public function update(BiodataSekolahRequest $request, $id) {
        $data = Biodata_Sekolah::findOrFail($id);
        $input = $request->all();
        foreach($input as $key => $value) {
            if($value === '') {
                $input[$key] = null;
            }
        }

        $data->update($request->all() ?? null);
        toast('Berhasil mengubah data!','info');
        return redirect()->back();
    }

    public function delete() {
        Biodata_Sekolah::truncate();
        toast('Berhasil menghapus data!','warning');
        return redirect()->back();
    }
}
