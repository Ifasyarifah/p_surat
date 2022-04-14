<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratkeluar extends Model
{
    protected $table = "suratkeluars";
    protected $fillable = ['nomor_suratK', 'perihal_k', 'nama_pemohon', 'tanggal_suratK', 'tempat', 'agenda', 'catatan', 'TTD'];
}
