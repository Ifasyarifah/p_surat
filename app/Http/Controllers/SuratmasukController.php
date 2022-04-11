<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\suratmasuk;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = suratmasuk::all();
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
            'nomor_suratM'   => 'required|string|max:255',
            'periha_m'     => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'hari_m' => 'required|string|max:255',
            'tanggal_surat' => 'required|string|max:255',
            'tempat'  => 'required|string|max:255',
            'acara' => 'required|string|max:255',
            'pakaian'      => 'required|string|max:255',
            'catatan'  => 'required|string|max:255',
            'fileupload' => 'required|file',
       
        ]);
        //upload image
        $image = $request->file('logo');
        $image->storeAs('public/image', $image->hashName());

        $data = suratmasuk::create([
                'nomor_suratM'          => $request->nomor_suratM,
                'perihal_m'             => $request->perihal_m,
                'nama_penerima'         => $request->nama_penerima,
                'hari_m'                => $request->hari_m,
                'tanggal_surat'         => $request->tanggal_surat,
                'tempat'                => $request->tempat,
                'acara'                 => $request->acara,
                'pakaian'               => $request->pakaian,
                'catatan'               => $request->catatan,
                'file'                  => $request->file,
                
            
        ]);
        if($data){
            return redirect()->route('surat_masuk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('surat_masuk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('show-surat_masuk', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Suratmasuk::findOrFail($id);
        return view('surat_masuk.edit',compact('data'))->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Suratmasuks = Suratmasuk::findOrFail($id); //mencari user berdasarkan id Suratmasuk
        // dd($Suratmasuks);
        $validated = $request->validate([
            'nomor_suratM'   => 'required|string|max:255',
            'periha_m'     => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'hari_m' => 'required|string|max:255',
            'tanggal_surat' => 'required|string|max:255',
            'tempat'  => 'required|string|max:255',
            'acara' => 'required|string|max:255',
            'pakaian'      => 'required|string|max:255',
            'catatan'  => 'required|string|max:255',
            'fileupload' => 'required|file',
       
        ]);

        if($request->file('file') == "") {

            $Suratmasuks->update([
                'id'                    => $request->id,
                'nomor_suratM'          => $request->nomor_suratM,
                'perihal_m'             => $request->perihal_m,
                'nama_penerima'         => $request->nama_penerima,
                'hari_m'                => $request->hari_m,
                'tanggal_surat'         => $request->tanggal_surat,
                'tempat'                => $request->tempat,
                'acara'                 => $request->acara,
                'pakaian'               => $request->pakaian,
                'catatan'               => $request->catatan,
                'file'                  => $request->file,
                
            ]);
    
        } else {
    
            //hapus old file
            Storage::disk('local')->delete('public/file/'.$Suratmasuks->file);
    
            //upload new file
            $file = $request->file('file');
            $file->storeAs('public/file', $image->hashName());
    
            $Suratmasuks->update([
                'id'                    => $request->id,
                'nomor_suratM'          => $request->nomor_suratM,
                'perihal_m'             => $request->perihal_m,
                'nama_penerima'         => $request->nama_penerima,
                'hari_m'                => $request->hari_m,
                'tanggal_surat'         => $request->tanggal_surat,
                'tempat'                => $request->tempat,
                'acara'                 => $request->acara,
                'pakaian'               => $request->pakaian,
                'catatan'               => $request->catatan,
                'file'                  => $request->file,
                
            ]);
    
        }
        if($Suratmasuks){
            return redirect()->route('surat_masuk.index')->with(['info' => 'Anda menambahkan item baru']);
        }else{
            return redirect()->route('surat_masuk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Suratmasuks = Suratmasuk::findOrFail($id);
        $Suratmasuks->delete();
        return redirect()->route('surat_masuk.index')->with(['warning' => 'Data Berhasil Hapus Sementara']);
         
    }

    public function getDeleteSuratmasuk()
    {
        $datas = Suratmasuk::onlyTrashed()->get();
        return view('surat_masuk.trash', compact('datas'));
    }

    public function restore($id)
    {

        $surat_masuk = Suratmasuk::onlyTrashed()->where('id', $id);
        $surat_masuk->restore();

        if ($surat_masuk) {
            return redirect()->route('surat_masuk.trash')->with(['success' => 'Data Berhasil Direstore!']);
        } else {
            return redirect()->route('surat_masuk.trash')->with(['error' => 'Data Gagal Direstore!']);
        
        }
    }

    public function restoreAll()
    {
        
        $compan= Suratmasuk::onlyTrashed();
        $compan->restore();

        if ($compan) {
            return redirect()->route('surat_masuk.index')->with(['success'  => 'Semua Data Berhasil Direstore!']);
        } else {
            return redirect()->route('surat_masuk.trash')->with(['error'    => 'Data Gagal Direstore!']);
        }
            
    }

    public function deletePermanent($id)
    {
        $surat_masuk = Suratmasuk::onlyTrashed()->where('id',$id);
        $surat_masuk->forceDelete();
       
        if ($surat_masuk) {
            return redirect()->route('surat_masuk.trash')->with(['success'   => 'Data Berhasil Dihapus Permanen!']);
        } else {
            return redirect()->route('surat_masuk.trash')->with(['error'     => 'Data Gagal Dihapus!']);
        } 
    }

    public function deleteAll()
    {

        $compan = Suratmasuk::onlyTrashed();
        $compan->forceDelete();

        if ($compan) {
            return redirect()->route('surat_masuk.index')->with(['success'   => 'Semua Data Berhasil Dihapus Permanen!']);
        } else {
            return redirect()->route('surat_masuk.trash')->with(['error'     => 'Data Gagal Dihapus!']);
        }
    }
}
