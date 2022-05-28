@extends('layouts.master')

@section('title', 'Surat Keluar')
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
                    <h5>Data Nomor Surat</h5>
                        </div>
                            <br></br>
                            @if($a=="1")
                        <a href="{{route('surat_keluar.create')}}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Create</a>
                    @endif
                </div>
                <div class="card-body">
                  <table id="suratkeluar" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>#</th>
                      <th>Nomor Surat</th>
                      <th>Perihal</th>
                      <th>Nama Pemohon</th>
                      <th>Tanggal Surat</th>
                      <th>Tempat</th>
                      <th>Agenda</th>
                      <th>Catatan</th>
                      <th>TTD</th>
                      <th class="text-center">Actions</th>
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
</div>
<form id="delete-form" action="" method="POST" class="d-none">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="_method" value="DELETE">
</form>
<!-- script -->
@push('custom-script')
<script>
    $('#suratkeluar').DataTable({
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
                data: 'nomor_suratK',
            },
            {
                data: 'perihal_k',
            },
            {
                data: 'nama_pemohon',
            },
            {
                data: 'tanggal_suratK',
            },
            {
                data: 'tempat',
            },
            {
                data: 'agenda',
            },
            {
                data: 'catatan',
            },
            {
                data: 'TTD',
            },
            {
            
                data: 'action',
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
@endpush
</script>             
@endsection