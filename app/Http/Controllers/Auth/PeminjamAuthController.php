<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamAuthController extends Controller
{
    /*
    |------------------------------------------------------------------
    | FORM LOGIN PEMINJAM
    |------------------------------------------------------------------
    */

    public function login()
    {
        return view('auth.loginpeminjam');
    }

    /*
    |------------------------------------------------------------------
    | PROSES LOGIN PEMINJAM
    |------------------------------------------------------------------
    */

    public function proseslogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        /*
        |------------------------------------------------------------------
        | LOGIN GUARD PEMINJAM
        |------------------------------------------------------------------
        */

        if (Auth::guard('peminjam')->attempt($credential)) {

            $request->session()->regenerate();

            return redirect('/dashboardpeminjam')
                ->with('success', 'Login peminjam berhasil');
        }

        return back()->with('error', 'Username atau Password salah');
    }

    /*
    |------------------------------------------------------------------
    | LOGOUT
    |------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::guard('peminjam')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Logout berhasil');
    }
}