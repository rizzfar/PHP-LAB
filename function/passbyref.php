<?php
  function tambahLima(&$angka) {
      $angka += 5;
  }

  $nilai = 10;
  echo "Nilai sebelum dipanggil: $nilai <br>";

  tambahLima($nilai);
  echo "Nilai setelah dipanggil: $nilai";
?>