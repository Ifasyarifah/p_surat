<!DOCTYPE html>
<html>

<head>
    <title>Laporan PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <center>
            <h3>Laporan Data Surat Keluah sebanyak : {{ $count }}</h3>
        </center>
        <table class="table table-bordered border-primary">
            <tr>
                <th>Tanggal Surat</th>
                <th>Nomor Surat</th>
                <th>Lampiran</th>
                <th>Perihal</th>
                <th>Nama Pemohon</th>
                <th>Tempat</th>
                <th>Tujuan</th>
                <th>Hari</th>
                <th>Tanggal Acara</th>
            </tr>
            @foreach ($suratkeluar as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal_s }}</td>
                    <td>{{ $item->nomor_suratK }}</td>
                    <td>{{ $item->lampiran }}</td>
                    <td>{{ $item->perihal_k }}</td>
                    <td>{{ $item->nama_pemohon }}</td>
                    <td>{{ $item->tempat }}</td>
                    <td>{{ $item->tujuan }}</td>
                    <td>{{ $item->hari }}</td>
                    <td>{{ $item->tgl }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
