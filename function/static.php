<?php 
  function hitung() {
    static $count = 0;
    $count++;

    echo "<b>function hitung di panggil sebanyak: $count kali <br>";
  }

  hitung();
  hitung();
  hitung();
  hitung();
  hitung();
?>