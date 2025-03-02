<?php
// Latihan 10: Null Coalescing Operator (PHP 7+)
$nama = null;

//memberikn nilai default jika nilai variable bernilai null
$namaDisplay = $nama ?? "Tidak ada nilai";

echo "Nama: $namaDisplay <br>";
?>