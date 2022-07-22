<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\suratkeluar;
use App\Models\suratmasuk;
use App\Models\nomorsurat;
use App\Models\disposisisurat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DataTables;
use Auth;
use PDF;
use PdfReport;

class ReportController extends Controller
{

    public function generatePDF(Request $request)
    {
        $suratmasuk = suratmasuk::whereBetween('tanggal_surat', [$request->start_date, $request->end_date])->get();
        $count = $suratmasuk->count();

        $pdf = PDF::loadView('surat_masuk.report', compact('suratmasuk', 'count'));
        return $pdf->stream('report_surat_masuk.pdf');
    }
}
