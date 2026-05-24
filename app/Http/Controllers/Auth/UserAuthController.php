<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FORM LOGIN USER
    |--------------------------------------------------------------------------
    */

    public function login()
    {
        return view('auth.loginuser');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES LOGIN USER
    |--------------------------------------------------------------------------
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

        if (Auth::attempt($credential)) {

            $request->session()->regenerate();

            /*
            |--------------------------------------------------------------------------
            | REDIRECT BERDASARKAN ROLE
            |--------------------------------------------------------------------------
            */

            if (Auth::user()->role == 'admin') {

                return redirect('/dashboardadmin')
                    ->with('success', 'Login Admin Berhasil');
            }

            if (Auth::user()->role == 'petugas') {

                return redirect('/dashboardpetugas')
                    ->with('success', 'Login Petugas Berhasil');
            }

            return redirect('/')
                ->with('error', 'Role tidak dikenali');
        }

        return back()->with('error', 'Username atau Password salah');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Logout berhasil');
    }
}