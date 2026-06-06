<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  
public function showLogin()
{
    return view('auth.login');
}

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return back()->with('error', 'Username tidak ditemukan');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah');
        }

        Auth::login($user);

        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        }

        if ($user->role == 'petugas') {
            return redirect('/petugas/dashboard');
        }

        return redirect('/peminjam/dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}