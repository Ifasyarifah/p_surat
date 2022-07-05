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
                            <a href="{{ route('surat_masuk.index') }}" class="btn btn-danger btn-sm"><i
                                    class="fa fa-arrow-left"></i> Kembali</a>
                        </div>

                        <form action="{{ route('surat_masuk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nomor Surat:</strong>
                                        <input type="number" name="nomor_suratM" class="form-control"
                                            placeholder="masukkan nomor surat">
                                        @foreach ($errors->get('nomor_suratM') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Perihal:</strong>
                                        <input type="text" name="perihal_m" class="form-control"
                                            placeholder="masukkan perihal">
                                        @foreach ($errors->get('perihal_m') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Penerima:</strong>
                                        <input type="text" name="nama_penerima" class="form-control"
                                            placeholder="masukkan nama penerima">
                                        @foreach ($errors->get('nama_penerima') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Hari:</strong>
                                        <input type="text" name="hari_m" class="form-control" placeholder="masukkan hari">
                                        @foreach ($errors->get('hari_m') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tgl/Bln/Thn Surat:</strong>
                                        <input type="date" name="tanggal_surat" class="form-control"
                                            placeholder="tanggal_surat">
                                        @foreach ($errors->get('tanggal_surat') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Lokasi:</strong>
                                        <input type="text" name="tempat" class="form-control"
                                            placeholder="masukkan lokasi">
                                        @foreach ($errors->get('tempat') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Agenda:</strong>
                                        <input type="text" name="acara" class="form-control"
                                            placeholder="masukkan agenda">
                                        @foreach ($errors->get('acara') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Pakaian:</strong>
                                        <input type="text" name="pakaian" class="form-control"
                                            placeholder="masukkan pakaian">
                                        @foreach ($errors->get('pakaian') as $message)
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
                                        <input type="file" name="file" class="form-control" placeholder="file">
                                        @foreach ($errors->get('file') as $message)
                                            <small class="text-danger">{{ $message }}</small>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Status:</strong>
                                        <input type="text" name="status" class="form-control"
                                            placeholder="masukkan status">
                                        @foreach ($errors->get('status') as $message)
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
