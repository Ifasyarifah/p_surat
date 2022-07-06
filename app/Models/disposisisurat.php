<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisisurat extends Model
{
    protected $table = "disposisisurats";
    protected $fillable = ['nomor_suratM','perihal_m','nama_penerima','hari_m','asal_surat', 'tanggal_surat','tempat','acara','pakaian','catatan'];
}
