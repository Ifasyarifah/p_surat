@extends('layouts.master')

@section('title', 'Disposisi Surat')
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
                    <h5>Data Disposisi Surat</h5>
                        </div>
                            <br></br>
                            @if($a=="1")
                        <a href="{{route('disposisi_surat.create')}}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Create</a>
                    @endif
                </div>
                <div class="card-body">
                  <table id="disposisi" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      <th>#</th>
                      <th>Asal Surat</th>
                      <th>Tgl Diterima</th>
                      <th>No Agenda</th>
                      <th>Tgl Disposisi</th>
                      <th>Nomor Disposisi</th>
                      <th>Perihal</th>
                      <th>Klarifikasi</th>
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
    $('#disposisi').DataTable({
        processing: true,
        serverside: true,
        ajax: {
            url: "{{ route('disposisi_surat.index') }}",
            type: 'GET',
        },
        "responsive": true,
        columns: [{
                data: 'DT_RowIndex',
            },
            {
                data: 'asal_surat',
            },
            {
                data: 'tanggal_diterima',
            },
            {
                data: 'nomor_agenda',
            },
            {
                data: 'tanggal_d',
            },
            {
                data: 'nomor_disposisi',
            },
            {
                data: 'perihal',
            },
            {
                data: 'klarifikasi',
            },
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
        $('#delete-form').attr('action', '/disposisi/' + id);
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
