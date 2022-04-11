<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratmasuk extends Model
{
    protected $table = "suratmasuks";
    protected $primaryKey = "id";
    protected $fillable = [
        'nomor_suratM', 'perihal_m', 'nama_penerima', 'hari_m', 'tanggal_surat', 'tempat', 'acara', 'pakaian', 'catatan', 'file'];
}
