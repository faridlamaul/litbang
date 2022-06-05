<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\User;
use com_exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function daftarUsers()
    {
        $users = User::with('roles')->whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->get();

        return view('admin.daftar-users', compact('users'));
    }

    public function daftarPermohonan()
    {
        return view('admin.daftar-permohonan');
    }

    public function daftarSurat()
    {
        $surats = Surat::all();

        return view('admin.daftar-surat', compact('surats'));
    }


    public function detailPermohonan()
    {
        return view('admin.detail-permohonan');
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect('/admin/daftar-users')->with('success', 'User berhasil dihapus');
    }

    public function addSurat(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        Surat::create($input);

        return redirect('/admin/daftar-surat')->with('success', 'Surat berhasil ditambahkan');
    }

    public function updateSurat(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        $surat = Surat::find($request->id);

        $surat->update($input);

        return redirect('/admin/daftar-surat')->with('success', 'Surat berhasil diubah');
    }

    public function deleteSurat(Request $request)
    {
        $surat = Surat::find($request->id);
        $surat->delete();

        return redirect('/admin/daftar-surat')->with('success', 'Surat berhasil dihapus');
    }
}