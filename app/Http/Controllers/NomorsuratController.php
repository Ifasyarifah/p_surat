<?php

namespace App\Http\Controllers;

use App\Models\nomorsurat;
use App\Models\disposisi;
use App\Models\suratkeluar;
use App\Models\suratmasuk;
use Illuminate\Http\Request;
use DataTables;
use Auth;

class NomorsuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = nomorsurat::all();
        $auth  = Auth::user();

        if ($request->ajax()) {
            return DataTables::of($datas)
                    ->addColumn('prefix', function($row){
                        return $row->prefix;
                    })
                    ->addColumn('action', function($row)use($auth){
                        $button = '';

                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="'.route('nomor_surat.edit',$row->id).'" class="btn btn-circle btn-secondary btn-small"><i class="fa fa-edit"></i></a>';

                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="javascrip:void(0)" onclick="confirmForm(this)" data-id="'.$row->id.'" data-name="'.$row->name.'" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('nomor_surat.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomor_surat.create');
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
            'prefix'   => 'required|string|max:255',
        ]);

        nomorsurat::create($validated);
        return redirect()->route('nomor_surat.index')
                         ->with('success', 'nomor surat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nomorsurat  $nomorsurat
     * @return \Illuminate\Http\Response
     */
    public function show(nomorsurat $nomorsurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nomorsurat  $nomorsurat
     * @return \Illuminate\Http\Response
     */
    public function edit(nomorsurat $nomor_surat)
    {
        return view('nomor_surat.edit', compact('nomor_surat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nomorsurat  $nomorsurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nomorsurat $nomor_surat)
    {
        $validated = $request->validate([
            'prefix'   => 'required|string|max:255',
        ]);

        $nomor_surat->update($validated);
        return redirect()->route('nomor_surat.index')
                         ->with('success', 'nomor surat berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nomorsurat  $nomorsurat
     * @return \Illuminate\Http\Response
     */
    public function destroy(nomorsurat $nomor_surat)
    {
        $nomor_surat->delete();
        return redirect()->route('nomor_surat.index')
                         ->with('success', 'nomor surat berhasil dihapus');
    }
}
