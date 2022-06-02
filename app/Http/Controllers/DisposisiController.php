<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\suratkeluar;
use App\Models\suratmasuk;
use App\Models\nomorsurat;
use App\Models\disposisi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DataTables;
use Auth;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = disposisi::all();
        $auth = Auth::user();
        if ($request->ajax()) {
            return DataTables::of($datas)
                    ->addColumn('asal_surat', function($row){
                        return $row->asal_surat;
                    })
                    ->addColumn('tanggal_diterima', function($row){
                        return $row->tanggal_diterima;
                    })
                    ->addColumn('nomor_agenda', function($row){
                        return $row->nomor_agenda;
                    })
                    ->addColumn('tanggal_d', function($row){
                        return $row->tanggal_d;
                    })
                    ->addColumn('nomor_disposisi', function($row){
                        return $row->nomor_disposisi;
                    })
                    ->addColumn('perihal', function($row){
                        return $row->perihal;
                    })
                    ->addColumn('klarifikasi', function($row){
                        return $row->klarifikasi;
                    })
                    ->addColumn('action', function($row)use($auth){
                        $button = '';

                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="'.route('disposisi_surat.edit',$row->id).'" class="btn btn-circle btn-secondary btn-small"><i class="fa fa-edit"></i></a>';

                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="javascrip:void(0)" onclick="confirmForm(this)" data-id="'.$row->id.'" data-name="'.$row->name.'" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('disposisi_surat.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disposisi_surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'asal_surat'     => 'required|string|max:255',
            'tanggal_diterima' => 'required|string|max:255',
            'nomor_agenda' => 'required|string|max:255',
            'tanggal_d'  => 'required|string|max:255',
            'nomor_disposisi' => 'required|string|max:255',
            'perihal'  => 'required|string|max:255',
            'klarifikasi' => 'required|file',
        ]);

        disposisi::create($validated);
        return redirect()->route('disposisi_surat.index')->with('success', 'nomor surat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function show(disposisi $disposisi)
    {
        return view('disposisi_surat.edit', compact('disposisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function edit(disposisi $disposisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disposisi $disposisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(disposisi $disposisi)
    {
        $disposisi->delete();
        return redirect()->route('disposisi_surat.index')
                         ->with('success', 'disposisi  berhasil dihapus');
    }
}
