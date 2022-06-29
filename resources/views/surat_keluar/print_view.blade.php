<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="width:100%">
        <tr>
            <td style="width: 10%;text-align:left;">
                <img src="<?php echo $ki_logo; ?>" style=" height:140px">
            </td>
            <th style="width:80%">
                PEMERINTAH PROVINSI JAWA TIMUR
                <br>
                KOMISI INFORMASI KABUPATEN SUMENEP
                <br>
                <small>Jl. Wahidin Sudiro Husodo No.3, Gudang, Kolor, Kec. Kota Sumenep, Kabupaten Sumenep</small>
                <br>
                <small>WebSite : <b><i>http://www.sumenepkab.go.id</i></b>&nbsp &nbsp &nbsp
                    <br>
                    Email : komisiinformasi.sumenep@gmail.com</small>
                <br>
                <font size="4"><u>SUMENEP</u></font>
                <br>
                <font size="1" style="margin-left:300px;">Kode Post : 69417</font>
                <br>
                <br>
                <br>
                <font size="4"><u>SURAT KELUAR</u></font>
                <br>
                <br>
            </th>
            <td style="width: 10%;text-align:right;">
                <img src="<?php echo $garuda_logo; ?>" style=" height:140px;">
                </th>
        </tr>
        <tr>

        </tr>
    </table>
    <table style="width: 100%;border-collapse: collapse;">
        <font size="3" style="margin-left:500px;">Sumenep, <?php echo $data['tanggal_s']; ?></font>
        <tr style="height:50px;">
            <td colspan="2">Surat Dari : Komisi Informasi Kab.Sumenep</td>
        </tr>
        <tr>
            <td style="width:50%;">Nomor Surat : <?php echo $data['nomor_suratK']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Lampiran : <?php echo $data['lampiran']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Perihal : <?php echo $data['perihal']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Kepada Yth. <br> <?php echo $data['nama_pemohon']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">SUMENEP</td>
        </tr>

        <br>
        <br>
        <tr>

            <td style="width:900%;"><br>Dengan hormat,
                <br>
                berdasarkan perintah majlis Komisioner yang menerima sengketa dengan nomor :
                <br><?php echo $data['nomor_suratK']; ?>
                Panitera Komisi Informasi Kabupaten Sumenep memanggil Bapak/ibu dan/atau kuasanya untuk hadir
                dalam sidang Ajudikasi terkait Sengketa Informasi Publik Tersebut antara :
            </td>
        </tr>
        <tr>

            <td style="width:900%;"><br><?php echo $data['nama_pemohon']; ?>
                Sebagai Pemohon Terhadap :
                <br>
                PEMERINTAH DAERAH KAB.SUMENEP sebagai Termohon :
                <br>
            <br>
            </td>
        </tr>
        <tr>
            <br>
            <br>
            <td style="width:900%;">yang akan diselenggarakan pada :
                <br>
                Sebagai Pemohon Terhadap :
                <br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;">Hari : <?php echo $data['hari']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Tgl/Bln/Thn  : <?php echo $data['tgl']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Waktu : <?php echo $data['waktu']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Lokasi : <?php echo $data['lokasi']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Agenda : <?php echo $data['agenda']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Catatan : <?php echo $data['catatan']; ?></td>
        </tr>
    </table>

</body>

</html>
