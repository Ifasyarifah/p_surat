@extends('surat_keluar.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Simple suratkeluar Management Application | BH</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('surat_keluar.create') }}"> Add suratkeluar</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($suratkeluars) > 0)
        <table class="table table-bordered">
            <tr>
            <th>Nomor Surat</th>
            <th>Perihal</th>
            <th>Nama Pemohon</th>
            <th>Tanggal Surat</th>
            <th>Tempat</th>
            <th>Agenda</th>
            <th>Catatan</th>
            <th>TTD</th>
            <th class="text-right">Actions</th>
            </tr>
            @foreach ($suratkeluar as $suratkeluar)
                <tr>
                    <td>{{ $suratkeluar-> nomor_suratK }}</td>
                    <td>{{ $suratkeluar->perihal_k }}</td>
                    <td>{{ $suratkeluar->nama_pemohon }}</td>
                    <td>{{ $suratkeluar->tanggal_suratK }}</td>
                    <td>{{ $suratkeluar->tempat }}</td>
                    <td>{{ $suratkeluar->agenda }}</td>
                    <td>{{ $suratkeluar->catatan }}</td>
                    <td>{{ $suratkeluar->TTD }}</td>
                    <td>
                        <form action="{{ route('surat_keluar.destroy',$suratkeluar->nomor_suratK) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('surat_keluar.show',$suratkeluar->nomor_suratK) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('surat_keluar.edit',$suratkeluar->nomor_suratK) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

    {!! $suratkeluar->links() !!}

@endsection