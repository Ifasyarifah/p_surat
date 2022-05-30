@extends('layouts.master')

@section('title', 'Tambah Surat Masuk')
@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Surat Masuk
                </div>
                <div class="card-body">
                    <div class="button-action" style="margin-bottom: 20px">
                        <a href="{{ route('surat_keluar.index') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <form action="{{ route('surat_keluar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Perihal:</strong>
                            <input type="text" name="perihal_k" class="form-control" placeholder="masukkan perihal">
                             </div>
                        </div>
                    </div>
                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Nama Pemohon:</strong>
                            <input type="text" name="nama_pemohon" class="form-control" placeholder="masukkan nama pemohon">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Tgl/Bln/Thn Surat:</strong>
                            <input type="date" name="tanggal_suratK" class="form-control" placeholder="tanggal_surat">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Lokasi:</strong>
                            <input type="text" name="tempat" class="form-control" placeholder="masukkan lokasi">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Agenda:</strong>
                            <input type="text" name="agenda" class="form-control" placeholder="masukkan agenda">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Catatan:</strong>
                            <input type="text" name="catatan" class="form-control" placeholder="masukkan catatan">
                        </div>
                    </div>
                </div>
                    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>File:</strong>
                        <input type="file" name="TTD" class="form-control" placeholder="file">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
