<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\suratkeluar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratkeluars = suratkeluar::all();
        return view('surat_keluar.index',compact('suratkeluars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_keluar.create');
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
            'nomor_suratK'   => 'required|string|max:255',
            'periha_k'     => 'required|string|max:255',
            'nama_pemohon' => 'required|string|max:255',
            'tanggal_suratK' => 'required|string|max:255',
            'tempat'  => 'required|string|max:255',
            'agenda' => 'required|string|max:255',
            'catatan'  => 'required|string|max:255',
            'TTD' => 'required|file',
        ]);

        suratkeluar::create($request->all());
        return redirect()->route(surat_keluar.index)
                         ->with('success', 'surat keluar berhasil disimpan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\suratkeluar $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function show(suratkeluar $suratkeluar)
    {
        return view('surat_keluar.edit', compact('suratkeluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suratkeluar $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $Request, suratkeluar $suratkeluar)
    {
       $request->validate([
            'nomor_suratK'   => 'required|string|max:255',
            'periha_k'     => 'required|string|max:255',
            'nama_pemohon' => 'required|string|max:255',
            'tanggal_suratK' => 'required|string|max:255',
            'tempat'  => 'required|string|max:255',
            'agenda' => 'required|string|max:255',
            'catatan'  => 'required|string|max:255',
            'TTD' => 'required|file',
        ]);
        
        $suratkeluar->update($request->all());
        return redirect()->route(surat_keluar.index)->with('success', 'surat keluar berhasil done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suratkeluar $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratkeluar $suratkeluar)
    {
        $suratkeluar->delete();
        return redirect()->route(surat_keluar.index)->with('success', 'surat keluar berhasil delete');
    }  

}
