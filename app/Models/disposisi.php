<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    protected $table = "disposisis";
    protected $fillable = ['nomor_suratK', 'perihal_k', 'nama_pemohon', 'tanggal_suratK', 'tempat', 'agenda', 'catatan', 'TTD'];
}
