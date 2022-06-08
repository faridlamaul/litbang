<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Surat;
use App\Models\User;
use com_exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Mockery\Matcher\Subset;

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
        $permohonans = Permohonan::join('riwayats', 'riwayats.id', '=', 'permohonans.riwayat_id')
            ->join('surats', 'surats.id', '=', 'permohonans.surat_id')
            ->select('permohonans.*', 'riwayats.*', 'surats.title')
            ->get();

        return view('admin.daftar-permohonan', compact('permohonans'));
    }

    public function tolakPermohonan(Request $request)
    {
        $permohonans = Permohonan::find($request->id);

        $permohonans->status = 'Ditolak';

        $permohonans->keterangan = $request->keterangan;

        $permohonans->save();

        return redirect('admin/daftar-permohonan');
    }

    public function terimaPermohonan(Request $request)
    {
        $permohonans = Permohonan::find($request->id);

        $permohonans->status = 'Diterima';

        $permohonans->ttd = $request->ttd;

        // AES Encrypt
        $AESEncrypt = Crypt::encryptString($permohonans->riwayat_id . '|' . $permohonans->surat_id . '|' . $permohonans->ttd);

        $permohonans->qrcode = $AESEncrypt;

        $permohonans->save();

        return redirect('admin/daftar-permohonan');
    }

    public function daftarSurat()
    {
        $surats = Surat::all();

        return view('admin.daftar-surat', compact('surats'));
    }


    public function detailPermohonan(Request $request)
    {
        $details = Permohonan::join('riwayats', 'riwayats.id', '=', 'permohonans.riwayat_id')
            ->select('permohonans.*', 'riwayats.*')
            ->where('permohonans.id', $request->id)
            ->get();

        return view('admin.detail-permohonan', compact('details'));
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

    public function getDownloadSuratSekolah(Request $request)
    {
        $permohonan = Permohonan::find($request->id);

        $file = public_path() . '/DataPemohon/SuratSekolah/' . $permohonan->surat_sekolah;

        return response()->download($file);
    }

    public function getDownloadProposal(Request $request)
    {
        $permohonan = Permohonan::find($request->id);

        $file = public_path() . '/DataPemohon/Proposal/' . $permohonan->proposal;

        return response()->download($file);
    }

    public function getDownloadKTP(Request $request)
    {
        $permohonan = Permohonan::find($request->id);

        $file = public_path() . '/DataPemohon/KTP/' . $permohonan->ktp;

        return response()->download($file);
    }

    public function getDownloadSuratInstansi(Request $request)
    {
        $permohonan = Permohonan::find($request->id);

        $file = public_path() . '/DataPemohon/SuratInstansi/' . $permohonan->surat_instansi;

        return response()->download($file);
    }
}