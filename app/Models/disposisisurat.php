<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisisurat extends Model
{
    protected $table = "disposisisurats";
    protected $fillable = ['asal_surat', 'tanggal_diterima', 'nomor_agenda', 'tanggal_d', 'nomor_disposisi', 'perihal', 'klarifikasi'];
}
