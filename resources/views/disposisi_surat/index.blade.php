@extends('layouts.master')

@section('title', 'Disposisi Surat')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <?php $a = auth::user()->isAdmin; ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Disposisi Surat</h3>
                            <div class="card-tools">
                                @if ($a == '1')
                                    {{-- <a href="{{ route('disposisi_surat.create') }}" type="button"
                                        class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Create</a> --}}
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="disposisisurat" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Surat</th>
                                        <th>Perihal</th>
                                        <th>Nama Penerima</th>
                                        <th>Hari</th>
                                        <th>Tanggal Surat</th>
                                        <th>Tempat</th>
                                        <th>Agenda</th>
                                        <th>Pakaian</th>
                                        <th>Catatan</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
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
    <!-- script -->
    @push('custom-script')
    <script>
        $('#disposisisurat').DataTable({
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
                        data: 'nomor_suratM',
                    },
                    {
                        data: 'perihal_m',
                    },
                    {
                        data: 'nama_penerima',
                    },
                    {
                        data: 'hari_m',
                    },
                    {
                        data: 'tanggal_surat',
                    },
                    {
                        data: 'tempat',
                    },
                    {
                        data: 'acara',
                    },
                    {
                        data: 'pakaian',
                    },
                    {
                        data: 'catatan',
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
            $('#delete-form').attr('action', '/disposisi_surat/' + id);
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
