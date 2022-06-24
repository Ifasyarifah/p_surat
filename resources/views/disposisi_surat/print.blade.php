<body>
    <div class="row">
        <div style="width:20%;float:left;">
            <img src="{{ asset('') }}img/ki_logo.png" style=" height:140px; margin-left: 30px;">
        </div>
        <div style="width:60%; float:left;">
            <center>
                <font size="3">PEMERINTAH PROVINSI JAWA TIMUR</font>
                <br>
                <font size="4">KOMISI INFORMASI KABUPATEN SUMENEP</font>
                <br>
                <font size="4"><b>SEKOLAH MENENGAH KEJURUAN NEGERI 1 SUMENEP<b></font>
                <br>
                <small>Jl. Wahidin Sudiro Husodo No.3, Gudang, Kolor, Kec. Kota Sumenep, Kabupaten Sumenep</small>
                <br>
                <small>WebSite : <b><i>http://www.sumenepkab.go.id</i></b>&nbsp &nbsp &nbsp Email :
                    komisiinformasi.sumenep@gmail.com</small>
                <br>
                <font size="4"><u>SUMENEP</U></font>
                <br>
                <font size="1" style="margin-left:400px;">Kode Post : 69417</font>
            </center>
        </div>
        <div style="width:20%;float:right;">
            <img src="https://onklas.smk1sumenep.sch.id/pluginfile.php/1/core_admin/logocompact/300x300/1645200023/logo.png"
                style="height:140px;">
        </div>
    </div>
    <div class="row">
        <center>
            <font size="5">LEMBAR DISPOSISI</font>
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
                    <td style="width:50%;">Asal Surat : <?php echo $d['asal_surat']; ?></td>
                    <td style="width:50%;">Tanggal Diterima : <?php echo $d['tanggal_diterima']; ?></td>
                </tr>
                <tr>
                    <td style="width:50%;">Nomor Agenda : <?php echo $d['nomor_agenda']; ?></td>
                    <td style="width:50%;">Tanggal Disposisi : <?php echo $d['tanggal_d']; ?></td>
                </tr>
                <tr style="height:50px;">
                    <td colspan="2">Perihal : <?php echo $d['perihal']; ?></td>
                </tr>
                <tr>
                    <td style="height:200px;">Klarifikasi Disposisi :
                        <br>
                        <b><?php echo $d['klarifikasi']; ?></b>
                        <br>
                        <br>
                        <br>Sifat :
                        <b><?php echo $d['status']; ?></b>
                    </td>
                    <td style="">Diteruskan Kepada :
                        <br>
                        <b><?php echo $d['reply_at']; ?></b>
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
                    <font size="2"><b><u><?php echo $d['disposition_at']; ?></u></b></font>
                    <br>
                    <font size="1">Pembina Tk.1</font>
                    <br>
                    <font size="2">NIP. 19641012 198903 1 011</font>
                </center>
            </div>
        </div>
    </div>
</body>

</html>
