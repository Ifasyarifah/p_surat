<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratkeluar extends Model
{
    protected $table = "suratkeluars";
    protected $fillable = ['tanggal_s', 'nomor_suratK', 'lampiran', 'perihal_k', 'nama_pemohon', 'tempat', 'isi', 'tujuan', 'hari', 'tgl', 'waktu', 'lokasi', 'agenda', 'catatan', 'TTD'];
}
