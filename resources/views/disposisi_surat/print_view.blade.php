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
                <font size="4"><u>LEMBAR DISPOSISI</u></font>
            </th>
            <td style="width: 10%;text-align:right;">
                <img src="<?php echo $garuda_logo; ?>" style=" height:140px;">
                </th>
        </tr>
        <tr>

        </tr>
    </table>
    <table border="1" style="width: 100%;border-collapse: collapse;">
        <font size="3" style="margin-left:500px;">Sumenep, <?php echo $data['tanggal_surat']; ?></font>
        <tr>
            <td style="width:50%;">Perihal : <?php echo $data['perihal_m']; ?></td>
            <td style="width:50%;">Nama penerima : <?php echo $data['nama_penerima']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Hari : <?php echo $data['hari_m']; ?></td>
            <td style="width:50%;">Lokasi : <?php echo $data['tempat']; ?></td>
        </tr>
        <tr>
            <td style="width:50%;">Pakaian : <?php echo $data['pakaian']; ?></td>
            <td style="width:50%;">Catatan : <?php echo $data['catatan']; ?></td>
        </tr>
        {{-- <tr style="height:50px;">
            <td colspan="2">Klarifikasi Surat : <?php echo $data['klarifikasi']; ?></td>
        </tr> --}}
    </table>
    {{-- <div class="row">
        <div style="width:20%;float:left;">
            <img src="<?php echo $ki_logo; ?>" style=" height:140px; margin-left: 30px;">
        </div>
        <div style="width:60%; float:left;">
            <center>
                <table border="1">
                    <thead>
                        <tr>
                            <th colspan=""><font size="3">PEMERINTAH PROVINSI JAWA TIMUR</font></th>
                        </tr>
                        <tr>
                            <th colspan=""><font size="4">KOMISI INFORMASI KABUPATEN SUMENEP</font></th>
                        </tr>
                            <th><font size="4"><b>SEKOLAH MENENGAH KEJURUAN NEGERI 1 SUMENEP<b></font></th>
                            <th><small>Jl. Truojoyo No. 298 Patean Telp.(0328) 664107, Fax.(0328) 673517</small></th>
                            <th><small>WebSite : <b><i>http://www.smkn1smn.sch.id</i></b>&nbsp &nbsp &nbsp Email : info@smk1smn.sch.id</small></th>
                            <th><font size="4"><u>SUMENEP</U></font></th>
                            <th><font size="1" style="margin-left:400px;">Kode Post : 69451</font></th>
                    </thead>
                </table>
            </center>
        </div>
        <div style="width:20%;float:right;">
            <img src="<?php echo $garuda_logo; ?>" style="height:140px;">
        </div>
    </div>
    <div class="row">
        <center>
            <table>
                <thead>
                    <tr>
                        <font size="5">LEMBAR DISPOSISI</font>
                    </tr>
                </thead>
            </table>
        </center>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr style="height:50px;">
                    <td colspan="2">Surat Dari : Ifa
                </tr>
                <tr>
                    <td style="width:50%;">Asal Surat : <?php echo $data['asal_surat']; ?></td>
                    <td style="width:50%;">Tanggal Diterima : <?php echo $data['tanggal_diterima']; ?></td>
                </tr>
                <tr>
                    <td style="width:50%;">Nomor Agenda : <?php echo $data['nomor_agenda']; ?></td>
                    <td style="width:50%;">Tanggal Disposisi : <?php echo $data['tanggal_d']; ?></td>
                </tr>
                <tr style="height:50px;">
                    <td colspan="2">Perihal : <?php echo $data['perihal']; ?></td>
                </tr>
                <tr>
                    <td style="height:200px;">Klarifikasi Disposisi :
                        <br>
                        <b><?php echo $data['klarifikasi']; ?></b>
                        <br>
                        <br>
                        <br>Sifat :
                        <b><?php echo $data['status']; ?></b>
                    </td>
                    <td style="">Diteruskan Kepada :
                        <br>
                        <b><?php echo $data['reply_at']; ?></b>
                    </td>
                </tr>
            </table>
            <br>
            <div style="width:30%;float:right;">
                <center>
                    <font size="2" align="left">Kepala Sekolah</font>
                    <br>
                    <br>
                    <br>
                    <br>
                    <font size="2"><b><u><?php echo $data['disposition_at']; ?></u></b></font>
                    <br>
                    <font size="1">Pembina Tk.1</font>
                    <br>
                    <font size="2">NIP. 19641012 198903 1 011</font>
                </center>
            </div>
        </div>
    </div> --}}
</body>

</html>
