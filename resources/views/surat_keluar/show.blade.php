@extends('surat_keluar.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show Stock</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('surat_keluar.index') }}"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Surat : </strong>
                {{ $suratkeluar-> nomor_suratK }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Perihal : </strong>
                {{ $suratkeluar->perihal_k }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pemohon : </strong>
                {{ $suratkeluar->nama_pemohon }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Surat : </strong>
                {{ $suratkeluar->tanggal_suratK }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat : </strong>
                {{ $suratkeluar->tempat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agenda : </strong>
                {{ $suratkeluar->agenda }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catatan : </strong>
                {{ $suratkeluar->catatan }}
            </div>
        </div>
    </div>
@endsection