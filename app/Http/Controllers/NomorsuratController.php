<?php

namespace App\Http\Controllers;

use App\Models\nomorsurat;
use Illuminate\Http\Request;

class NomorsuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = nomorsurat::all();
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
    public function edit(nomorsurat $nomorsurat)
    {
        return view('nomor_surat.edit', compact('nomorsurat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nomorsurat  $nomorsurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nomorsurat $nomorsurat)
    {
        $validated = $request->validate([
            'prefix'   => 'required|string|max:255',
        ]);

        $nomorsurat->update($validated);
        return redirect()->route('nomor_surat.index')
                         ->with('success', 'nomor surat berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nomorsurat  $nomorsurat
     * @return \Illuminate\Http\Response
     */
    public function destroy(nomorsurat $nomorsurat)
    {
        $nomorsurat->delete();
        return redirect()->route('nomor_surat.index')
                         ->with('success', 'nomor surat berhasil dihapus');
    }
}
