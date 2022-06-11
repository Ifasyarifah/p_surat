@extends('layouts.master')

@section('title', 'Surat Keluar')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <?php $a = auth::user()->isAdmin; ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Nomor Surat</h3>
                            <div class="card-tools">
                                @if ($a == '1')
                                    <a href="{{ route('nomor_surat.create') }}" type="button"
                                        class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Create</a>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="nomor_surat" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Prefix</th>
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
            $('#nomor_surat').DataTable({
                processing: true,
                serverside: true,
                ajax: {
                    url: "{{ route('nomor_surat.index') }}",
                    type: 'GET',
                },
                "responsive": true,
                columns: [{
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'prefix',
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

                $('#delete-form').attr('action', '/nomor_surat/' + id);

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
