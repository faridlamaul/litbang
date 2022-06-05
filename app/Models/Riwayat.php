<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'alamat',
        'asal_sekolah',
        'email',
        'no_telp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function surats()
    {
        return $this->belongsToMany(Surat::class, 'permohonans');
    }
}