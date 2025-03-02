<?php 
  if (isset($_POST['nama']) && isset($_POST['umur'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    var_dump("Nama: $nama, Umur: $umur");
  } else {
    echo "Data tidak ditemukan";
  }
?>