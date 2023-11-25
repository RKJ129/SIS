<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\UbahPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect(route('admin.index'));
        }else{
            return view('admin.login.index');
        }
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('admin.index'));
        } else {
            return back()->withErrors([
                'error' => 'Username atau Password salah!',
            ]);
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function verifikasiEmail() {
        return view('admin.verifikasiEmail.index');
    }

    public function actionVerifikasiEmail(Request $request) {
        $users = User::where('email', $request->email)->first();
        if($users) {
            $name = $users->name;
            return redirect()->route('resetPassword', compact('name'));
        } else {
            return redirect()->back()->withErrors(['error' => 'Email tidak tersedia']);
        }
    }

    public function resetPassword($name) {
        $user = User::where('name', $name)->first();
        return view('admin.forgotPassword.index', compact('user'));
    }

    public function actionResetPassword(UbahPassword $request) {
        $user = User::where('email', $request->email)->first();
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        toast('Berhasil Mengubah Password', 'success');
        return redirect()->route('login');
    }

}
