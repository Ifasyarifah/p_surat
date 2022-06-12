@extends('layouts.master')

@section('title', 'Tambah Surat Masuk')
@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Nomor Surat
                    </div>
                    <div class="card-body">
                        <div class="button-action" style="margin-bottom: 20px">
                            <a href="{{ route('nomor_surat.index') }}" class="btn btn-danger btn-sm"><i
                                    class="fa fa-arrow-left"></i> Kembali</a>
                        </div>

                        <form action="{{ route('nomor_surat.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nomor Surat:</strong>
                                        <input type="text" name="nomor_suratK"
                                            class="form-control @error('nomor_suratK') is-invalid @enderror"
                                            value="{{ old('nomor_suratK') }}" id="nomor_suratK" name="nomor_suratK"
                                            placeholder="masukkan nomor surat">
                                        @error('nomor_suratK')
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
