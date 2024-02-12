<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginadmin');
    }

      public function loginadmin(Request $request)
    {
        // Validasi informasi login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan pengguna ke halaman dashboard
            return redirect()->intended('admin/adminpage');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Email atau Password salah',
        ]);
    }

    public function logout()
{
    Auth::logout();
    return redirect('/loginadmin');
}
protected $redirectTo = '/adminpage';

}
