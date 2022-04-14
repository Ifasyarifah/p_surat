@extends('surat_keluar.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit Stock</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('surat_keluar.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('surat_keluar.update',$suratkeluar->nomor_suratK) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Surat:</strong>
                <input type="number" name="nomor_suratK" class="form-control" placeholder="nomor_suratK">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Perihal:</strong>
                <textarea class="form-control" style="height:150px" name="perihal_m" placeholder="perihal_m"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Surat:</strong>
                <input type="date" class="form-control" name="tanggal_suratK" placeholder="tanggal_suratK">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat:</strong>
                <input type="text" class="form-control" name="tempat" placeholder="tempat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agenda:</strong>
                <input type="text" class="form-control" name="agenda" placeholder="agenda">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catatan:</strong>
                <textarea class="form-control" style="height:150px" name="catatan" placeholder="catatan"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TTD:</strong>
                <input type="file" class="form-control" name="TTD" placeholder="TTD">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    </form>
@endsection