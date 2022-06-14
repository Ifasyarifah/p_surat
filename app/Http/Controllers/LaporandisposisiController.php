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

class LaporandisposisiController extends Controller
{
    public function print($id)
    {
        $data = disposisisurat::find($id);

        $ki_path = public_path('img\ki_logo.png');
        $ki_type = pathinfo($ki_path, PATHINFO_EXTENSION);
        $ki_data = file_get_contents($ki_path);
        $ki_logo = 'data:image/' . $ki_type . ';base64,' . base64_encode($ki_data);

        $garuda_path = public_path('img\logo.png');
        $garuda_type = pathinfo($garuda_path, PATHINFO_EXTENSION);
        $garuda_data = file_get_contents($garuda_path);
        $garuda_logo = 'data:image/' . $garuda_type . ';base64,' . base64_encode($garuda_data);

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('disposisi_surat.print_view', compact('data','ki_logo','garuda_logo'));
        return $pdf->stream('print.pdf');
    }

    public function printView($id)
    {
        $data = disposisisurat::find($id);

        $ki_path = public_path('img\ki_logo.png');
        $ki_type = pathinfo($ki_path, PATHINFO_EXTENSION);
        $ki_data = file_get_contents($ki_path);
        $ki_logo = 'data:image/' . $ki_type . ';base64,' . base64_encode($ki_data);

        $garuda_path = public_path('img\logo.png');
        $garuda_type = pathinfo($garuda_path, PATHINFO_EXTENSION);
        $garuda_data = file_get_contents($garuda_path);
        $garuda_logo = 'data:image/' . $garuda_type . ';base64,' . base64_encode($garuda_data);

        return view('disposisi_surat.print_view', compact('data','ki_logo','garuda_logo'));
    }
}
