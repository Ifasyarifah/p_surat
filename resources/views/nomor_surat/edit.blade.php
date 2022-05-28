@extends('layouts.master')

@section('title', 'Edit Nomor Surat')
@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Nomor Surat
                </div>
                <div class="card-body">
                    <div class="button-action" style="margin-bottom: 20px">
                        <a href="{{ route('nomor_surat.index') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <form action="{{ route('nomor_surat.update', [$nomor_surat->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Prefix :</strong>
                            <input type="text" name="prefix" class="form-control" value="{{ $nomor_surat->prefix }}" placeholder="masukkan Prefix No Surat">
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