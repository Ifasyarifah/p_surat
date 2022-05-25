@extends('layouts.master')

@section('title', 'Surat Masuk')
@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    @extends('layouts.master')

@section('title', 'Halaman Surat Masuk')

@section('content') 
<div class="container">
  <div class="content mt-4">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
        <?php $a =auth::user()->isAdmin ?>
          <div class="card">
            <div class="card-header">
                <div class="card-header" >
                    <h5>Data Surat Masuk</h5>
                </div>
                <br></br>
                @if($a=="1")
                <a href="{{route('surat_masuk.create')}}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Create</a>
                <!-- <form><input class="search" type="text"placeholder="cari..." required>
                  <input class="button" type="button" value="Cari"></form> -->
                @endif
              </div>

                <div class="card-body">
                  <table id="Suratmasuk" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>#</th>
                      <th>Nomor Surat</th>
                      <th>Perihal</th>
                      <th>Nama Penerima</th>
                      <th>Hari</th>
                      <th>Tanggal/Waktu</th>
                      <th>Tempat</th>
                      <th>Agenda</th>
                      <th>Pakaian</th>
                      <th>Catatan</th>
                      <th>File</th>
                      <th>Status</th>
                      <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{ $data->nomor_suratM }}</td>
                          <td>{{ $data->perihal_m }}</td>
                          <td>{{ $data->nama_penerima }}</td>
                          <td>{{ $data->hari_m }}</td>
                          <td>{{ $data->tanggal_surat }}</td>
                          <td>{{ $data->tempat }}</td>
                          <td>{{ $data->acara }}</td>
                          <td>{{ $data->pakaian }}</td>
                          <td>{{ $data->catatan }}</td>
                          <td class="text-center">
                              <a href="{{ asset('storage/file/surat-masuk/'.$data->file)}}">File</a>
                          </td>
                          <td>{{$data->status}}</td>
                          <td class="text-center col-3">
                            <form action="{{ route('surat_masuk.destroy', [$data->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn btn-danger btn-sm" onclick= "return confirm('Apakah anda ingin menghapus data surat masuk ?'); event.preventDefault();
                                document.getElementById('delete-item').submit();">
                                <span class="fa fa-trash"></span>
                                </button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
          </div>                      
        </div>
      </div>
    </div>
  </div>
</div> 
<!-- script -->
@section('javascript')
<script>
    $('#kelas-table').DataTable({
        processing: true,
        serverside: true,
        ajax: {
            url: "{{ route('surat_masuk.index') }}",
            type: 'GET',
        },
        "responsive": true,
        columns: [{
                data: 'DT_RowIndex',
            },
            {
                data: 'surat_masuk',
            },
        ]
    });

    
</script>
@endsection
</script>             
@endsection
  
                </div>
                <div class="card-body">
                    <div class="button-action" style="margin-bottom: 20px">
                        @can('surat_keluar-create')
                        <a href="{{ route('surat_keluar.create') }}" class="btn btn-danger btn-icon-split">Tambah</a>
                        @endcan
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="kelas-table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nomor Surat</th>
                                    <th scope="col">Perihal</th>
                                    <th scope="col">Nama Pemohon</th>
                                    <th scope="col">Tgl/Wkt Surat</th>
                                    <th scope="col">Tempat</th>
                                    <th scope="col">Agenda</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">TTD</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="delete-form" action="" method="POST" class="d-none">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="_method" value="DELETE">
</form>
@section('javascript')
<script>
    $('#Suratkeluar').DataTable({
        processing: true,
        serverside: true,
        ajax: {
            url: "{{ route('surat_keluar.index') }}",
            type: 'GET',
        },
        "responsive": true,
        columns: [{
                data: 'DT_RowIndex',
            },
            {
                data: 'surat_keluar',
            },
            
        ]
    });

    function deleteData() {
        event.preventDefault();
        document.getElementById('delete-form').submit();
    }

    function confirmForm(e) {
        let id = e.getAttribute('data-id');

        $('#delete-form').attr('action', '/surat_keluar/' + id);

        if (!confirm('Anda Yakin Ingin Menghapusnya ?')) {
            event.preventDefault();
        } else {
            deleteData();
        }
    }
</script>
@endsection
@endsection