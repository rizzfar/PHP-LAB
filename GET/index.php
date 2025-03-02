<?php 
  // $nama = $_GET['nama'];
  // $umur = $_GET['umur'];

  if (isset($_GET['nama']) && isset($_GET['umur'])) {
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
    echo "Nama: $nama, Umur: $umur";
  } else {
    echo "Data tidak ditemukan.";
}
?>