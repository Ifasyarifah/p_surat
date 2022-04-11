@extends('layouts.master')

@section('title', '| surat_masuk')
@section('content') 
<div class="container">
  <div class="content mt-4">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong><br>
                <a href="{{route('surat_masuk.create')}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Create</a>
                <a href="{{route('surat_masuk.trash')}}" type="button" class="btn btn-secondary btn-sm"><i class="fa fa-shopping-cart"></i> Restore</a>
            </div>
                <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>ID</th>
                      <th>Nomor Surat</th>
                      <th>Perihal</th>
                      <th>Nama Penerima</th>
                      <th>Hari</th>
                      <th>Tanggal Surat</th>
                      <th>Tempat</th>
                      <th>Acara</th>
                      <th>Pakaian</th>
                      <th>Catatan</th>
                      <th>File</th>
                      <th>Status</th>
                      <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{ $data->id }}</td>
                          <td>{{ $data->nomor_suratM }}</td>
                          <td>{{ $data->Perihal_m }}</td>
                          <td>{{ $data->nama_penerima }}</td>
                          <td>{{ $data->hari_m }}</td>
                          <td>{{ $data->tanggal_surat }}</td>
                          <td>{{ $data->tempat }}</td>
                          <td>{{ $data->acara }}</td>
                          <td>{{ $data->pakaian }}</td>
                          <td>{{ $data->catatan }}</td>
                          <td>{{ $data->file }}</td>
                          <td class="text-center">
                              <img src="{{ Storage::url('public/file/') .$data->file }} " class="rounded" style="width: 150px">
                          </td>
                          <td>{{$data->website_url}}</td>
                          <td class="text-center col-3">
                            <a href="{{route('surat_masuk.edit',[$data->id])}}" type="button" class="btn btn-primary btn-sm">
                              <span class="fa fa-edit"> Edit</span>
                            </a>
                            <form action="{{ route('surat_masuk.destroy', [$data->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn btn-danger btn-sm" onclick= "return confirm('Apakah anda ingin menghapus item.?'); event.preventDefault();
                                document.getElementById('delete-item').submit();">
                                <span class="fa fa-trash"> Delete</span>
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
@endsection
  