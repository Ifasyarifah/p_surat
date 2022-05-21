@extends('layouts.master')

@section('title', 'Create Suratmasuk')
@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Tempat KP
                </div>
                <div class="card-body">
                    <form action="{{ route('surat_masuk.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="id">ID</label>
                          <input type="text" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}" id="id" name="id" placeholder="Enter ID">

                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="nomor_suratM">Nomor Surat</label>
                          <input type="number" class="form-control @error('nomor_suratM') is-invalid @enderror" id="nomor_suratM" name="nomor_suratM" placeholder="Enter Nomor Surat">{{ old('nomor_suratM') }}

                            @error('nomor_suratM')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="perihal_m">Perihal</label>
                            <input type="text" class="form-control @error('perihal_m') is-invalid @enderror" value="{{ old('perihal_m') }}" id="perihal_m" name="perihal_m" placeholder="Enter Perihal">

                            @error('perihal_m')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_penerima">Postal Code</label>
                            <input type="text" class="form-control @error('nama_penerima') is-invalid @enderror" value="{{ old('nama_penerima') }}" id="nama_penerima" name="nama_penerima" placeholder="Enter Nama Penerima">

                            @error('nama_penerima')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hari_m">Hari</label>
                            <input type="text" class="form-control @error('hari_m') is-invalid @enderror" value="{{ old('hari_m') }}" id="hari_m" name="hari_m" placeholder="Enter hari_m">

                            @error('hari_m')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_surat">Tgl/Wkt Surat</label>
                            <input type="datetime-local" class="form-control @error('tanggal_surat') is-invalid @enderror" value="{{ old('tanggal_surat') }}" id="tanggal_surat" name="tanggal_surat" placeholder="Enter Tgl/wktu">

                            @error('tanggal_surat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control @error('hari_m') is-invalid @enderror" value="{{ old('tempat') }}" id="tempat" name="tempat" placeholder="Enter Tempat">

                            @error('tempat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="acara">Agenda</label>
                            <input type="text" class="form-control @error('acara') is-invalid @enderror" value="{{ old('acara') }}" id="hari_m" name="hari_m" placeholder="Enter Agenda">

                            @error('acara')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pakaian">Pakaian</label>
                            <input type="text" class="form-control @error('hari_m') is-invalid @enderror" value="{{ old('pakaian') }}" id="pakaian" name="pakaian" placeholder="Enter pakaian">

                            @error('pakaian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea type="text" class="form-control @error('catatan') is-invalid @enderror" value="{{ old('catatan') }}" id="catatan" name="catatan" placeholder="Enter Catatan"></textarea> 

                            @error('catatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}" id="status" name="status" placeholder="Enter status">

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection