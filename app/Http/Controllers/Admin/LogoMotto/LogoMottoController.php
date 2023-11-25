<?php

namespace App\Http\Controllers\Admin\LogoMotto;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogoMottoRequest;
use App\Models\LogoMotto;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class LogoMottoController extends Controller
{
    public function index() {
        
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $data = LogoMotto::first();
        return view('admin.logoMotto.index', compact('data'));
    }

    public function store(LogoMottoRequest $request) {

        if(LogoMotto::count() > 0) {
            toast('Tidak bisa menambahkan data lagi!','error');
            return redirect()->back();
        }

        $imgLogo = $request->file('img');
        $imgNameLogo = time() . '_' . $imgLogo->getClientOriginalName();

        $imgLogo->move('img/logoSekolah/', $imgNameLogo);

        LogoMotto::create([
            'img' => $imgNameLogo,
            'description_logo' => $request->description_logo,
            'motto' => $request->motto
        ]);

        toast('Berhasil menambahkan data!','success');

        return redirect()->back();
    }

    public function update(LogoMottoRequest $request, $id) {
        $data = LogoMotto::findOrFail($id);

        if($request->has('img')) {
            $img = $request->file('img');
            $imgName = time() . '_' . $img->getClientOriginalName();
    
            File::delete('img/logoSekolah/' . $data->img);
            $img->move('img/logoSekolah/', $imgName);
           
    
            $data->update([
                'img' => $imgName,
                'description_logo' => $request->description_logo,
                'motto' => $request->motto
            ]);
        } else {
            $data->update([
                'description_logo' => $request->description_logo,
                'motto' => $request->motto
            ]);
        }

        toast('Berhasil mengubah data!','info');

        return redirect()->back();
    }

    public function delete($id) {
        $data = LogoMotto::findOrFail($id);
        File::delete('img/logoSekolah/' . $data->img);
        $data->delete();

        toast('Berhasil menghapus data!','warning');
        return redirect()->back();
    }
}
