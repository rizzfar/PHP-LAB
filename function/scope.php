<?php 
  $varGlobal = 20;

  function angka() {
    $varLokal = 10;

    echo "Nilai variabel lokal $varLokal <br>";

    global $varGlobal;
    echo "Nilai variabel global $varGlobal";
  }

  angka();
?>