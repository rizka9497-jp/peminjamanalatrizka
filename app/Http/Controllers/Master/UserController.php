<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /*
    |------------------------------------------------------------------
    | TAMPIL DATA
    |------------------------------------------------------------------
    */

    public function index()
    {
        $user = User::latest()->get();

        return view('user.user.index', compact('user'));
    }

    /*
    |------------------------------------------------------------------
    | FORM TAMBAH
    |------------------------------------------------------------------
    */

    public function create()
    {
        return view('user.user.create');
    }

    /*
    |------------------------------------------------------------------
    | SIMPAN DATA
    |------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'nama'     => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role'     => 'required',

        ]);

        User::create([

            'nama'     => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role'     => $request->role,

        ]);

        return redirect('/user')
            ->with('success', 'Data user berhasil ditambahkan');
    }

    /*
    |------------------------------------------------------------------
    | DETAIL
    |------------------------------------------------------------------
    */

    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return view('user.user.show', compact('user'));
    }

    /*
    |------------------------------------------------------------------
    | FORM EDIT
    |------------------------------------------------------------------
    */

    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('user.user.edit', compact('user'));
    }

    /*
    |------------------------------------------------------------------
    | UPDATE
    |------------------------------------------------------------------
    */

    public function update(Request $request, string $id)
    {
        $request->validate([

            'nama'     => 'required',
            'username' => 'required',
            'role'     => 'required',

        ]);

        $user = User::findOrFail($id);

        $user->update([

            'nama'     => $request->nama,
            'username' => $request->username,
            'role'     => $request->role,

        ]);

        return redirect('/user')
            ->with('success', 'Data user berhasil diupdate');
    }

    /*
    |------------------------------------------------------------------
    | HAPUS
    |------------------------------------------------------------------
    */

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/user')
            ->with('success', 'Data user berhasil dihapus');
    }
}