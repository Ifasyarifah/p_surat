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
            </th>
            <td style="width: 10%;text-align:right;">
                <img src="<?php echo $garuda_logo; ?>" style=" height:140px;">
                </th>
        </tr>
        <td colspan="3">
            <hr>
        </td>
    </table>
    <table style="width: 100%;border-collapse: collapse;">
        <font size="3" style="margin-left:500px;">Sumenep, <?php echo $data['tanggal_s']; ?></font>
        <font size="3" style="margin-right:300px;">Nomor: <?php echo $data['nomor_suratK']; ?></font>
        <br>
        <font size="3" style="margin-right:500px;">Lampiran : <?php echo $data['lampiran']; ?></font>
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
            <td colspan="3"><br>Dengan hormat ,
                <br>
                <br>
                &nbsp &nbsp &nbsp Berdasarkan perintah majlis Komisioner yang menerima sengketa dengan nomor
                <?php echo $data['nomor_suratK']; ?>
                Panitera Komisi Informasi Kabupaten Sumenep memanggil Bapak/ibu dan/atau kuasanya untuk hadir
                dalam sidang Ajudikasi terkait Sengketa Informasi Publik Tersebut antara :
            </td>
        </tr>
        <tr>

            <td style="width:900%;" align="center"><br><?php echo $data['nama_pemohon']; ?>
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

                <br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;">Hari : <?php echo $data['hari']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Tgl/Bln/Thn : <?php echo $data['tgl']; ?></td>
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

        </div>
    </table>
    <div style="width:30%;float:right;">
        <center>
            <font size="2" align="left">Komisi Informasi Kab.Sumenep</font>
            <br>
            <img src="<?php echo $ki_logo; ?>" style=" height:90px">
            <br>
            <font size="3">Badrul
                Akhmadi, S.Pd
                <hr>
            </font>
            <font size="2">Ketua Komisioner</font>
        </center>

</body>

</html>
