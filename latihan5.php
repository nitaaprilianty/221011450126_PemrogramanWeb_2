<HTML>
    <HEAD>
        <TITLE> Getdate </TITLE>
    </HEAD>
    <BODY>
        <center>
            <h1>Getdate</h1>
        </center>
        <?php
        $sekarang = getdate();
        $bulan = $sekarang['month'];
        $hari = $sekarang['mday'];
        $tahun = $sekarang['year'];
        $jam = $sekarang['hours'];
        if ($jam <= 11) {
        
            $waktu = "Pagi";
        } elseif ($jam <= 15) {
            $waktu = "Siang";
        } elseif ($jam <= 18) {
            $waktu = "Sore";
        } else {
            $waktu = "Malam";
        }
        ?>
</h1>
<h2> Selamat datang</h2>
<h3> Sekarang adalah tanggal <?php echo "$hari $bulan $tahun"; ?></h3>
</BODY>
</HTML> 