@extends('layouts.master')

@section('title', '| Trash surat_masuk')
@section('content')
<div class="container">
  <div class="content mt-4">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong><br>
                <a href="{{route('surat_masuk.deleteAll')}}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Delete Permanen ?');"><i class=" fa fa-times"></i> Delete All</a>
                <a href="{{route('surat_masuk.restoreAll')}}" type="button" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Restore All</a>
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
                          <td>{{ $surats_masuks->id }}</td>
                          <td>{{ $surats_masuks->nomor_suratM }}</td>
                          <td>{{ $surats_masuks->Perihal_m }}</td>
                          <td>{{ $surats_masuks->nama_penerima }}</td>
                          <td>{{ $surats_masuks->hari_m }}</td>
                          <td>{{ $surats_masuks->tanggal_surat }}</td>
                          <td>{{ $surats_masuks->tempat }}</td>
                          <td>{{ $surats_masuks->acara }}</td>
                          <td>{{ $surats_masuks->pakaian }}</td>
                          <td>{{ $surats_masuks->catatan }}</td>
                          <td>{{ $surats_masuks->file }}</td>
                          <td class="text-center">
                              <img src="{{ Storage::url('public/image/') .$data->logo }} " class="rounded" style="width: 150px">
                          </td>
                          <td>{{$data->website_url}}</td>
                          <td class="text-center col-3">
                            <a href="{{route('surat_masuk.restore',[$data->id])}}" type="button" class="btn btn-primary btn-sm">
                              <span class="fa fa-reply"> Restore</span>
                            </a>
                            <a href="{{route('surat_masuk.deletePermanent',[$data->id])}}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Delete Permanen ?');">
                              <span class="fa fa-trash-o"> Delate</span>
                            </a>
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