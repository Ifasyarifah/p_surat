@extends('layouts.master')

@section('title', 'Surat Masuk')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <?php $a = auth::user()->isAdmin; ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Surat Masuk</h3>
                            <div class="card-tools">
                                @if ($a == '1')
                                    <a href="{{ route('surat_masuk.create') }}" type="button"
                                        class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Create</a>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="suratmasuk" class="table table-striped table-bordered">
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
                                        <th>File</th>
                                        <th>Status</th>
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
            $('#suratmasuk').DataTable({
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
                        data: 'file',
                    },
                    {
                        data: 'status',
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
                $('#delete-form').attr('action', '/surat_masuk/' + id);
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
