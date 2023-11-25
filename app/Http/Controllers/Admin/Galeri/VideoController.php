<?php

namespace App\Http\Controllers\Admin\Galeri;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin ingin menghapus??";
        confirmDelete($title, $text);
        
        $data = GaleriVideo::orderBy('id', 'asc')->get();
        return view('admin.galeri.video.index', compact('data'));
    }

    public function store(VideoRequest $request) {

        if($request->has('thumbnail')) {
            $thumbnail = time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->move('img/galeri/video/thumbnail/', $thumbnail);
        }

        $video = time() . '_' . $request->file('video')->getClientOriginalName();
        $input = GaleriVideo::create([
            'judul' => $request->judul,
            'video' => $video,
            'thumbnail' => $thumbnail,
        ]);
        if($input) {
            $request->file('video')->move('img/galeri/video/', $video);
        }

        toast('Berhasil menambahkan data!', 'success');
        return redirect()->back();
    }

    public function update(VideoRequest $request, $id) {
        $data = GaleriVideo::findOrFail($id);

        File::delete('img/galeri/video/thumbnail/' . $data->thumbnail);
        if($request->has('thumbnail')) {
            $thumbnail = time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->move('img/galeri/video/thumbnail/', $thumbnail);
        }

        $video = time() . '_' . $request->file('video')->getClientOriginalName();

        File::delete('img/galeri/video/' . $data->video);
        $request->file('video')->move('img/galeri/video/', $video);

        $data->update([
            'judul' => $request->judul,
            'video' => $video,
            'thumbnail' => $thumbnail,
        ]);

        

        toast('Berhasil mengubah data!', 'info');
        return redirect()->back();
    }

    public function delete($id) {
        $data = GaleriVideo::findOrFail($id);
        File::delete('img/galeri/video/' . $data->video);
        File::delete('img/galeri/video/thumbnail/' . $data->thumbnail);
        $data->delete();

        toast('Berhasil menghapus data!', 'warning');
        return redirect()->back();
    }

    public function truncate() {
        File::cleanDirectory('img/galeri/video');
        File::cleanDirectory('img/galeri/video/thumbnail');
        GaleriVideo::truncate();

        toast('Berhasil reset data!', 'warning');
        return redirect()->back();
    }
}
