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
  