@extends('layouts.master')

@section('title', 'Create Suratmasuk')
@section('content')
<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Create Surat Masuk</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('surat_masuk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                         
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="number" class="form-control @error('id') is-invalid @enderror"name="id" value="{{ old('id') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="number" class="form-control @error('nomor_suratM') is-invalid @enderror"name="nomor_suratM" value="{{ old('nomor_suratM') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Perihal</label>
                                    <input type="text" class="form-control @error('perihal_m') is-invalid @enderror"name="perihal_m" value="{{ old('perihal_m') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Penerima Surat</label>
                                    <input type="text" class="form-control @error('nama_penerima') is-invalid @enderror" name="nama_penerima" value="{{ old('nama_penerima') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hari</label>
                                    <input type="text" class="form-control @error('hari_m') is-invalid @enderror"name="hari_m" value="{{ old('hari_m') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Surat Masuk</label>
                                    <div class="cal-icon">
                                        <input type="date" class="form-control datetimepicker @error('tanggal_surat') is-invalid @enderror" name="tanggal_surat" value="{{ old('tanggal_surat') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tempat</label>
                                    <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Acara</label>
                                    <input type="text" class="form-control @error('acara') is-invalid @enderror" name="acara" value="{{ old('acara') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pakaian</label>
                                    <input type="text" class="form-control @error('pakaian') is-invalid @enderror" name="pakaian" value="{{ old('pakaian') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea class="form-control @error('catatan') is-invalid @enderror" rows="1.5" id="catatan" name="catatan" value="{{ old('catatan') }}"></textarea>
                                </div>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Create Surat Masuk</button>
            </form>
        </div>
    </div>
    @section('script')
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
        </script>
    @endsection

@endsection