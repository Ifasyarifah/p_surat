<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\suratkeluar;
use App\Models\suratmasuk;
use App\Models\nomorsurat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DataTables;
use Auth;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = suratmasuk::all();
        $auth = Auth::user();
        if ($request->ajax()) {
            return DataTables::of($datas)
                    ->addColumn('nomor_suratM', function($row){
                        return $row->nomor_suratM;
                     })
                    ->addColumn('perihal_m', function($row){
                        return $row->perihal_m;
                    })
                    ->addColumn('nama_penerima', function($row){
                        return $row->nama_penerima;
                    })
                    ->addColumn('hari_m', function($row){
                        return $this->getDay($row->tanggal_surat);
                    })
                    ->addColumn('tanggal_surat', function($row){
                        return $row->tanggal_surat;
                    })
                    ->addColumn('tempat', function($row){
                        return $row->tempat;
                    })
                    ->addColumn('acara', function($row){
                        return $row->acara;
                    })
                    ->addColumn('pakaian', function($row){
                        return $row->pakaian;
                    })
                    ->addColumn('catatan', function($row){
                        return $row->catatan;
                    })
                    ->addColumn('file', function($row){
                        $button = '&nbsp;&nbsp;';
                        $button .= '<a href="'.Storage::url('public/doc/surat_masuk/'.$row->file).'" class="btn btn-circle btn-secondary btn-sm"><i class="fa fa-download"></i></a>';

                        return $button;
                    })
                    ->addColumn('status', function($row){
                        return $row->status;
                    })
                    ->addColumn('action', function($row)use($auth){
                        $button = '';

                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="javascrip:void(0)" onclick="confirmForm(this)" data-id="'.$row->id.'" data-name="'.$row->name.'" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                        return $button;
                    })
                    ->rawColumns(['action', 'file'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('surat_masuk.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_masuk.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_suratM'     => 'required|string|max:255',
            'perihal_m'     => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'tanggal_surat' => 'required|string|max:255',
            'tempat'  => 'required|string|max:255',
            'acara' => 'required|string|max:255',
            'pakaian'  => 'required|string|max:255',
            'catatan'  => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf',
            'status'  => 'required|string|max:255',
        ]);

        $validated['hari_m'] = $this->getDay($validated['tanggal_surat']);

        $file = $request->file('file');
        $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
        $validated['file'] = $nama_file;
        $file->storeAs('public/doc/surat_masuk/', $nama_file);
        suratmasuk::create($validated);
        return redirect()->route('surat_masuk.index')->with('success', 'nomor surat berhasil disimpan');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\suratmasuk $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(suratmasuk $suratmasuk)
    {
        return view('surat_masuk.edit', compact('suratmasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suratmasuk $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $Request, suratmasuk $suratmasuk)
    {
       $request->validate([
            'nomor_suratM'     => 'required|string|max:255',
            'perihal_m'        => 'required|string|max:255',
            'nama_penerima'    => 'required|string|max:255',
            'tanggal_surat'    => 'required|string|max:255',
            'tempat'           => 'required|string|max:255',
            'acara'            => 'required|string|max:255',
            'pakaian'          => 'required|string|max:255',
            'catatan'          => 'required|string|max:255',
            'file'             => 'required|file',
            'status'           => 'required|string|max:255',
        ]);

        $data = $request->all();
        $data['hari_m'] = $this->getDay($data['tanggal_surat']);


        $suratmasuk->update($data);
        return redirect()->route('surat_masuk.index')->with('success', 'surat masuk berhasil done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suratmasuk $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratmasuk $surat_masuk)
    {
        $surat_masuk->delete();
        return redirect()->route('surat_masuk.index')->with('success', 'surat masuk berhasil delete');
    }

    private function getDay($date)
    {
        return \Carbon\Carbon::parse($date)->isoFormat('dddd');
    }



}
