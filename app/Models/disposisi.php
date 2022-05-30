<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    protected $table = "disposisis";
    protected $fillable = ['asal_surat', 'tanggal_diterima', 'nomor_agenda', 'nomor_disposisi', 'perihal', 'klarifikasi'];
}
