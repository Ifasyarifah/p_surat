@extends('layouts.master')

@section('title', 'Tambah Surat Masuk')
@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Disposisi Surat
                    </div>
                    <div class="card-body">
                        <div class="button-action" style="margin-bottom: 20px">
                            <a href="{{ route('disposisi_surat.index') }}" class="btn btn-danger btn-sm"><i
                                    class="fa fa-arrow-left"></i> Kembali</a>
                        </div>

                        <form action="{{ route('disposisi_surat.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Asal Surat:</strong>
                                        <input type="text" name="asal_surat" class="form-control"
                                            placeholder="masukkan nomor surat">
                                        @foreach ($errors->get('asal_surat') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal Diterima:</strong>
                                        <input type="date" name="tanggal_diterima" class="form-control"
                                            placeholder="masukkan">
                                        @foreach ($errors->get('tanggal_diterima') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nomor Agenda:</strong>
                                        <input type="number" name="nomor_agenda" class="form-control"
                                            placeholder="masukkan nomor agenda">
                                        @foreach ($errors->get('nomor_agenda') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal Disposisi:</strong>
                                        <input type="date" name="tanggal_d" class="form-control" placeholder="masukkan Tanggal Disposisi">
                                        @foreach ($errors->get('tanggal_d') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nomor Disposisi:</strong>
                                        <input type="number" name="nomor_disposisi" class="form-control"
                                            placeholder="Masukkan Nomor Disposisi">
                                        @foreach ($errors->get('nomor_disposisi') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Perihal:</strong>
                                        <input type="text" name="perihal" class="form-control"
                                            placeholder="masukkan Perihal">
                                        @foreach ($errors->get('perihal') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Klarifikasi:</strong>
                                        <input type="text" name="klarifikasi" class="form-control"
                                            placeholder="masukkan Klarifikasi Surat">
                                        @foreach ($errors->get('klarifikasi') as $message)
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
