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
                            <a href="{{ route('surat_keluar.index') }}" class="btn btn-danger btn-sm"><i
                                    class="fa fa-arrow-left"></i> Kembali</a>
                        </div>

                        <form action="{{ route('surat_keluar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal Surat:</strong>
                                        <input type="date" name="tanggal_s"
                                            class="form-control @error('tanggal_s') is-invalid @enderror"
                                            value="{{ old('tanggal_s') }}" id="tanggal_s" name="tanggal_s"
                                            placeholder="masukkan Tanggal Surat">
                                        @error('tanggal_s')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Lampiran:</strong>
                                        <input type="text" name="lampiran"
                                            class="form-control @error('lampiran') is-invalid @enderror"
                                            value="{{ old('lampiran') }}" id="lampiran" name="lampiran"
                                            placeholder="masukkan Lampiran">
                                        @error('lampiran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Perihal:</strong>
                                        <input type="text" name="perihal_k"
                                            class="form-control @error('perihal_k') is-invalid @enderror"
                                            value="{{ old('perihal_k') }}" id="perihal_k" name="perihal_k"
                                            placeholder="masukkan perihal">
                                        @error('perihal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Pemohon:</strong>
                                        <input type="text" name="nama_pemohon"
                                            class="form-control @error('nama_pemohon') is-invalid @enderror"
                                            value="{{ old('nama_pemohon') }}" id="nama_pemohon" name="nama_pemohon"
                                            placeholder="masukkan nama pemohon">
                                        @error('nama_pemohon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tempat:</strong>
                                        <input type="text" name="tempat"
                                            class="form-control @error('tempat') is-invalid @enderror"
                                            value="{{ old('tempat') }}" id="tempat" name="tempat"
                                            placeholder="masukkan tempat">
                                        @error('tempat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Isi Surat:</strong>
                                        <input type="text" name="isi"
                                            class="form-control @error('isi') is-invalid @enderror"
                                            value="{{ old('isi') }}" id="isi" name="isi" placeholder="masukkan isi">
                                        @error('isi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tujuan Surat:</strong>
                                        <input type="text" name="tujuan"
                                            class="form-control @error('tujuan') is-invalid @enderror"
                                            value="{{ old('tujuan') }}" id="tujuan" name="tujuan"
                                            placeholder="masukkan Tujuan Surat">
                                        @error('tujuan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Hari:</strong>
                                        <input type="text" name="hari"
                                            class="form-control @error('hari') is-invalid @enderror"
                                            value="{{ old('hari') }}" id="hari" name="hari"
                                            placeholder="masukkan hari">
                                        @error('hari')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tgl/Wkt Surat:</strong>
                                        <input type="date" name="tgl"
                                            class="form-control @error('tgl') is-invalid @enderror"
                                            value="{{ old('tgl') }}" id="tgl" name="tgl" placeholder="tanggal_surat">
                                        @error('tgl')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Lokasi:</strong>
                                        <input type="text" name="lokasi"
                                            class="form-control @error('lokasi') is-invalid @enderror"
                                            value="{{ old('lokasi') }}" id="lokasi" name="lokasi"
                                            placeholder="masukkan lokasi">
                                        @error('lokasi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Agenda:</strong>
                                        <input type="text" name="agenda"
                                            class="form-control @error('agenda') is-invalid @enderror"
                                            value="{{ old('agenda') }}" id="agenda" name="agenda"
                                            placeholder="masukkan agenda">
                                        @error('agenda')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Catatan:</strong>
                                        <input type="text" name="catatan"
                                            class="form-control @error('catatan') is-invalid @enderror"
                                            value="{{ old('catatan') }}" id="catatan" name="catatan"
                                            placeholder="masukkan catatan">
                                        @error('catatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>File:</strong>
                                        <input type="file" name="TTD"
                                            class="form-control @error('TTD') is-invalid @enderror"
                                            value="{{ old('TTD') }}" id="TTD" name="TTD" placeholder="file">
                                        @error('TTD')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
