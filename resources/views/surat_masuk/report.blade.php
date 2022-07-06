<!DOCTYPE html>
<html>

<head>
    <title>Laporan PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Laporan Data Surat Masuk sebanyak : {{$count}}</h1>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Nomor Surat</th>
                <th>Perihal</th>
                <th>Tanggal Surat</th>
                <th>Tempat</th>
                <th>Agenda</th>
            </tr>
            @foreach ($suratmasuk as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nomor_suratM }}</td>
                    <td>{{$item->perihal_m }}</td>
                    <td>{{$item->tanggal_surat }}</td>
                    <td>{{$item->tempat }}</td>
                    <td>{{$item->acara }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
