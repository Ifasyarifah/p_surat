<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKeluarController extends Controller
{
    public function laporan(Request $request)
    {
        $suratkeluar = suratkeluar::whereBetween('tanggal_s', [$request->start_date, $request->end_date])->get();
        $count = $suratkeluar->count();

        $pdf = PDF::loadView('surat_keluar.report', compact('suratkeluar', 'count'));
        return $pdf->stream('report_surat_keluar.pdf');
    }
}
