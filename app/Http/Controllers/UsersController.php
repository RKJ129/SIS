<?php

namespace App\Http\Controllers;

use App\Http\Requests\UbahPassword;
use App\Http\Requests\UpdateImage;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index() {
        $users = User::select('id', 'img', 'name', 'email')->get();
        return view('admin.user.index', compact('users'));
    }

    public function store(UserRequest $request) {
        $userData = $request->except(['password']) + ['password' => Hash::make($request->password)];
        if($request->has('img')) {
            $img = time() . '_' . $request->file('img')->getClientOriginalName();
            $request->file('img')->move('img/users/', $img);
            $userData['img'] = $img;
        }

        User::create($userData);

        toast('Berhasil menambahkan data!', 'success');
        return redirect()->back();
    }

    public function update(UserRequest $request, $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        toast('Berhasil mengubah data!', 'info');
        return redirect()->back();
    }

    public function updatePassword(UbahPassword $request, $id) {
        if (!Hash::check($request->get('current_password'), Auth::user()->password)) 
        {
            return back()->withErrors(['error' => 'Password lama invalid']);
        }

        if (strcmp($request->get('current_password'), $request->password) == 0) 
        {
            return redirect()->back()->withErrors(['error' => 'Password baru tidak bisa sama dengan password lama']);
        }

        $user = User::findOrFail($id);
        $user->update([
            'password' => $request->password,
        ]);

        toast('Berhasil mengubah password', 'info');
        return redirect()->back();
    }

    public function updateImage(UpdateImage $request, $id) {
        $user = User::findOrFail($id);
        if($request->has('img')) {
            $img = time() . '_' . $request->file('img')->getClientOriginalName();
            File::delete('img/users/' . $user->img);
            $request->file('img')->move('img/users/', $img);
            $user->update([
                'img' => $img,
            ]);

            toast('Berhasil mengubah foto!', 'info');
            return redirect()->back();
        } else {
            alert()->error('ERROR', 'Gagal Mengubah foto!');
            return redirect()->back();
        }
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        File::delete('img/users/' . $user->img);
        $user->delete();

        toast('Berhasil menghapus data!', 'warning');
        return redirect()->back();
    }
}
