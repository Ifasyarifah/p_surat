@extends('layouts.master')

@section('title', 'Surat Keluar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-12">
                        <?php $a = auth::user()->isAdmin; ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Surat Keluar</h4> <br>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <form action="{{ route('laporan') }}" method="POST">
                                            @csrf
                                            <label for="start_date">Start Date</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control"
                                                placeholder="Start Date" aria-label="Start Date">
                                    </div>
                                    <div class="col-4">
                                        <label for="end_date">End Date</label>
                                        <input type="date" name="end_date" class="form-control" placeholder="End Date"
                                            aria-label="End Date">
                                    </div>
                                    <div class="col mt-4" style="margin-top: 30px !important;">
                                        <input type="submit" class="btn btn-primary" value="Cetak">
                                        </form>
                                        <a href="{{ route('surat_keluar.create') }}" class="btn btn-danger"><span><i
                                                    class="fa fa-plus"></i></span> Create</a>
                                    </div>
                                </div>
                                <div class="card-tools">
                                    @if ($a == '1')
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="suratkeluar" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Surat</th>
                                            <th>Nomor Surat</th>
                                            <th>Lampiran</th>
                                            <th>Perihal</th>
                                            <th>Nama Pemohon</th>
                                            <th>Tempat</th>
                                            <th>Isi</th>
                                            <th>Tujuan</th>
                                            <th>Hari</th>
                                            <th>Tanggal Acaras</th>
                                            <th>Waktu Acara</th>
                                            <th>Lokasi</th>
                                            <th>Agenda</th>
                                            <th>Catatan</th>
                                            <th>TTD</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Surat</th>
                                            <th>Nomor Surat</th>
                                            <th>Lampiran</th>
                                            <th>Perihal</th>
                                            <th>Nama Pemohon</th>
                                            <th>Tempat</th>
                                            <th>Isi</th>
                                            <th>Tujuan</th>
                                            <th>Hari</th>
                                            <th>Tanggal Acara</th>
                                            <th>Waktu Acara</th>
                                            <th>Lokasi</th>
                                            <th>Agenda</th>
                                            <th>Catatan</th>
                                            <th>TTD</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </tfoot>
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
                            data: 'tanggal_s',
                        },
                        {
                            data: 'nomor_suratK',
                        },
                        {
                            data: 'lampiran',
                        },
                        {
                            data: 'perihal_k',
                        },
                        {
                            data: 'nama_pemohon',
                        },
                        {
                            data: 'tempat',
                        },
                        {
                            data: 'isi',
                        },
                        {
                            data: 'tujuan',
                        },
                        {
                            data: 'hari',
                        },
                        {
                            data: 'tgl',
                        },
                        {
                            data: 'waktu',
                        },
                        {
                            data: 'lokasi',
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
