<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Riwayat;
use App\Models\Surat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use QrCode;

use function PHPSTORM_META\type;

class UserController extends Controller
{
    public function index()
    {
        $surats = Surat::all();

        return view('dashboard', compact('surats'));
    }

    public function riwayat()
    {
        $permohonans = Permohonan::join('surats', 'surats.id', '=', 'permohonans.surat_id')
            ->join('riwayats', 'riwayats.id', '=', 'permohonans.riwayat_id')
            ->select('permohonans.*', 'riwayats.*', 'surats.title')
            ->get();

        return view('riwayat', compact('permohonans'));
    }

    public function permohonanUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'surat_sekolah' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'proposal' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'ktp' => ['required', 'image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
            'surat_instansi' => ['required', 'file', 'mimes:pdf', 'max:2048'],
        ]);

        $input = $request->all();

        if ($ktp = $request->file('ktp')) {
            $destinationPath = 'DataPemohon/KTP/';
            $ktpName = "KTP_" . date('YmdHis') . "." . $ktp->getClientOriginalExtension();
            $ktp->move($destinationPath, $ktpName);
            $input['ktp'] = "$ktpName";
        }

        if ($surat_sekolah = $request->file('surat_sekolah')) {
            $destinationPath = 'DataPemohon/SuratSekolah/';
            $suratSekolahName = "Surat_Sekolah_" . date('YmdHis') . "." . $surat_sekolah->getClientOriginalExtension();
            $surat_sekolah->move($destinationPath, $suratSekolahName);
            $input['surat_sekolah'] = "$suratSekolahName";
        }

        if ($proposal = $request->file('proposal')) {
            $destinationPath = 'DataPemohon/Proposal/';
            $proposalName = "Proposal_" . date('YmdHis') . "." . $proposal->getClientOriginalExtension();
            $proposal->move($destinationPath, $proposalName);
            $input['proposal'] = "$proposalName";
        }

        if ($surat_instansi = $request->file('surat_instansi')) {
            $destinationPath = 'DataPemohon/SuratInstansi/';
            $suratInstansiName = "SuratInstansi_" . date('YmdHis') . "." . $surat_instansi->getClientOriginalExtension();
            $surat_instansi->move($destinationPath, $suratInstansiName);
            $input['surat_instansi'] = "$suratInstansiName";
        }

        Riwayat::create([
            'user_id' => Auth::user()->id,
            'name' => $input['name'],
            'alamat' => $input['alamat'],
            'asal_sekolah' => $input['asal_sekolah'],
            'email' => $input['email'],
            'no_telp' => $input['no_telp'],
        ]);

        $riwayat = Riwayat::where('user_id', Auth::user()->id)->latest()->first();

        Permohonan::create([
            'riwayat_id' => $riwayat->id,
            'surat_id' => $request->id,
            'tanggal_permohonan' => Carbon::now()->toDateTimeString(),
            'surat_sekolah' => $input['surat_sekolah'],
            'proposal' => $input['proposal'],
            'ktp' => $input['ktp'],
            'surat_instansi' => $input['surat_instansi'],
        ]);

        return redirect('user/riwayat')->with('success', 'Permohonan berhasil dikirim');
    }

    public function generatePDF(Request $request)
    {
        $permohonan = Permohonan::find($request->id);

        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate($permohonan['qrcode']));

        $pdf = PDF::loadView('surat-persetujuan-pdf', compact('qrcode'));

        // display pdf in browser
        return $pdf->stream('Surat-' . $permohonan['tanggal_permohonan'] . '-' . $permohonan['name'] . '.' . 'pdf');
    }
}