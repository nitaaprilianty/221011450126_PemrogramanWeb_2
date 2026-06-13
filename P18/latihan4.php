<?php
$a = 10;

if ($a > 0) {
   echo "Variabel A terdefinisi dan aman dari Notice.";
}

echo "<br>";

if (isset($_GET['test']) && $_GET['test'] == 0) {
   echo "Parameter test bernilai 0";
} else {
   echo "Gunakan URL: http://localhost:8080/pemrograman_web_2/P18/ agar kondisi terpenuhi.";
}
?>