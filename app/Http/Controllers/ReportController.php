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
    public function report(Request $request)
{
    $fromDate = $request->input('from_date');
    $toDate = $request->input('to_date');
    $sortBy = $request->input('sort_by');

    $title = 'Registered User Report'; // Report title

    $meta = [ // For displaying filters description on header
        'Registered on' => $fromDate . ' To ' . $toDate,
        'Sort By' => $sortBy
    ];

    $queryBuilder = suratmasuks::select(['nomor_suratM', 'perihal_m', 'nama_penerima', 'hari_m', 'tanggal_surat', 'tempat', 'acara', 'pakaian', 'catatan', 'file', 'status']) // Do some querying..
                        ->whereBetween('tanggal_surat', [$fromDate, $toDate])
                        ->orderBy($sortBy);

    $columns = [ // Set Column to be displayed
        'nomor_suratM' => 'nomor_suratM',
        'Registered At' => 'perihal_m',
        'Nama Penerima' => 'nama_penerima',
        'Hari' => 'hari_m',
        'Tanggal Surat' => 'tanggal_surat',
        'Tempat' => 'tempat',
        'Acara' => 'acara',
        'Pakaian' => 'pakaian',
        'Catatan' => 'catatan',// if no column_name specified, this will automatically seach for snake_case of column name (will be registered_at) column from query result
        'Total Surat' => 'nomor_suratM',
        'Status' => function($result) { // You can do if statement or any action do you want inside this closure
            return ($result->nomor_suratM > 100000) ? 'Rich Man' : 'Normal Guy';
        }
    ];

    // Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
    return report_pdf::of($title, $meta, $queryBuilder, $columns)
                    ->editColumn('Total Surat', [ // Change column class or manipulate its data for displaying to report
                        'displayAs' => function($result) {
                            return $result->tanggal_surat->format('d M Y');
                        },
                        'class' => 'left'
                    ])
                    ->editColumns(['Total Surat', 'Status'], [ // Mass edit column
                        'class' => 'right bold'
                    ])
                    ->showTotal([ // Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
                        'Total Surat' => 'point' // if you want to show dollar sign ($) then use 'Total Balance' => '$'
                    ])
                    ->limit(20) // Limit record to be showed
                    ->stream(); // other available method: store('path/to/file.pdf') to save to disk, download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
}

    public function generatePDF(Request $request)
    {
        $suratmasuk = suratmasuk::whereBetween('tanggal_surat', [$request->start_date, $request->end_date])->get();
        $count = $suratmasuk->count();

        $pdf = PDF::loadView('surat_masuk.report', compact('suratmasuk', 'count'));
        return $pdf->stream('report_surat_masuk.pdf');
    }
}
