<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'riwayat_id',
        'surat_id',
        'tanggal_permohonan',
        'surat_sekolah',
        'proposal',
        'ktp',
        'surat_instansi',
        'status',
        'qrcode',
        'ttd',
    ];
}