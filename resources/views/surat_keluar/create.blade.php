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
                                        <input type="date" name="tanggal_s" class="form-control"
                                            placeholder="masukkan Tanggal Surat">
                                        @foreach ($errors->get('tanggal_s') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Lampiran:</strong>
                                        <input type="text" name="lampiran" class="form-control"
                                            placeholder="masukkan Lampiran">
                                        @foreach ($errors->get('lampiran') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Perihal:</strong>
                                        <input type="text" name="perihal_k" class="form-control"
                                            placeholder="masukkan perihal">
                                        @foreach ($errors->get('perihal_k') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Pemohon:</strong>
                                        <input type="text" name="nama_pemohon" class="form-control"
                                            placeholder="masukkan nama pemohon">
                                        @foreach ($errors->get('nama_pemohon') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tempat:</strong>
                                        <input type="text" name="tempat" class="form-control"
                                            placeholder="masukkan tempat">
                                        @foreach ($errors->get('tempat') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Isi Surat:</strong>
                                        <input type="text" name="isi" class="form-control" placeholder="masukkan isi">
                                        @foreach ($errors->get('isi') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tujuan Surat:</strong>
                                        <input type="text" name="tujuan" class="form-control"
                                            placeholder="masukkan Tujuan Surat">
                                        @foreach ($errors->get('tujuan') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tgl/Wkt Surat:</strong>
                                        <input type="date" name="tgl" class="form-control" placeholder="tanggal_surat">
                                        @foreach ($errors->get('tgl') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Lokasi:</strong>
                                        <input type="text" name="lokasi" class="form-control"
                                            placeholder="masukkan lokasi">
                                        @foreach ($errors->get('lokasi') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Agenda:</strong>
                                        <input type="text" name="agenda" class="form-control"
                                            placeholder="masukkan agenda">
                                        @foreach ($errors->get('agenda') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Catatan:</strong>
                                        <input type="text" name="catatan" class="form-control"
                                            placeholder="masukkan catatan">
                                        @foreach ($errors->get('catatan') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>File:</strong>
                                        <input type="file" name="TTD" class="form-control" placeholder="file">
                                        @foreach ($errors->get('TTD') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
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
