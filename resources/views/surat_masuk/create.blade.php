@extends('layouts.master')

@section('title', '| Cerate Suratmasuk')
@section('content') 
<div class="container">
    <div class="content mt-4">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="card">
                      <div class="card-header">{{ __('Create Suratmasuk') }}</div>
                        <div class="card-body card-block">
                            <form action="{{route('surat_masuk.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="number" id="nomor_suratM" name="nomor_suratM" placeholder="nomor suratM" class="form-control @error('nomor_suratM') is-invalid @enderror" value="{{ old('nomor_suratM') }}">
                                    @error('nomor_suratM')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="perihal_m" name="perihal_m" placeholder="perihal_m" class="form-control @error('perihal_m') is-invalid @enderror" value="{{ old('perihal_m') }}">
                                    @error('perihal_m')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                                <input type="text" id="nama_penerima" name="nama_penerima" class="form-control @error('nama_penerima') is-invalid @enderror" value="{{ old('nama_penerima') }}">
                                    @error('nama_penerima')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                                <input type="text" id="hari_m" name="hari_m" placeholder="Website Url" class="form-control @error('hari_m') is-invalid @enderror" value="{{ old('hari_m') }}">
                                    @error('hari_m')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                                <input type="date" id="tanggal_surat" name="tanggal_surat" placeholder="tanggal_surat" class="form-control @error('tanggal_surat') is-invalid @enderror" value="{{ old('tanggal_surat') }}">
                                    @error('tanggal_surat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                                <input type="text" id="tempat" name="tempat" placeholder="tempat" class="form-control @error('tempat') is-invalid @enderror" value="{{ old('tempat') }}">
                                    @error('tempat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                                <input type="text" id="acara" name="acara" placeholder="acara" class="form-control @error('acara') is-invalid @enderror" value="{{ old('acara') }}">
                                    @error('acara')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                                <input type="text" id="pakaian" name="pakaian" placeholder="pakaian" class="form-control @error('pakaian') is-invalid @enderror" value="{{ old('pakaian') }}">
                                    @error('pakaian')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                               <textarea name="catatan" id="catatan" cols="30" rows="10">catatan</textarea>
                                    @error('catatan')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-chain"></i></div>
                                <input type="file" id="file" name="file" placeholder="file" class="form-control @error('file') is-invalid @enderror" value="{{ old('file') }}">
                                    @error('file')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection