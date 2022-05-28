<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\suratkeluar;
use App\Models\nomorsurat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DataTables;
use Auth;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suratkeluars = suratkeluar::all();
        $auth = Auth::user();

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
            'perihal_k'     => 'required|string|max:255',
            'nama_pemohon' => 'required|string|max:255',
            'tanggal_suratK' => 'required|string|max:255',
            'tempat'  => 'required|string|max:255',
            'agenda' => 'required|string|max:255',
            'catatan'  => 'required|string|max:255',
            'TTD' => 'required|file',
        ]);

        $data = $request->all();
        $data['nomor_suratK'] = $this->generateNomorSurat();

        suratkeluar::create([
            'perihal_k' => $data['perihal_k'],
            'nama_pemohon' => $data['nama_pemohon'],
            'tanggal_suratK' => $data['tanggal_suratK'],
            'tempat' => $data['tempat'],
            'agenda' => $data['agenda'],
            'catatan' => $data['catatan'],
            'nomor_suratK' => $data['nomor_suratK'],
            'TTD'   => $data['TTD'],
        ]);
        return redirect()->route('surat_keluar.index')
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

    private function generateNomorSurat()
    {
        $count  = suratkeluar::count();
        $prefix = nomorsurat::first();

        if ($count > 0) {
            $count  = $count + 1;
            $no     = sprintf("%03s", $count);
        }else{
            $no = "001";
        }

        if (empty($prefix)) {
            $pref = "/KI. KAB.SMP/I/";
        }else{
            $pref = $prefix->prefix;
        }

        $no_prefix = $no.$pref.date('Y');
        return $no_prefix;
    }

}
