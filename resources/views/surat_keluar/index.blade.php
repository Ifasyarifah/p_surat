@extends('layouts.master')

@section('title', 'Surat Keluar')
@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger">Data Surat Keluar</h6>
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