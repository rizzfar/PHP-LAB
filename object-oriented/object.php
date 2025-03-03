<?php 

  class Mobil {
    public $merk;
    public $warna;

    public function klakson() {
      echo "beepp beep!!";
    }
  }

  $mobilSaya = new Mobil();
  $mobilSaya -> $merk = 'Toyota';
  $mobilSaya -> $warna = 'Merah Jambu';
  $mobilSaya -> klakson();
  echo $mobilSaya -> $merk;
  echo $mobilSaya -> $warna;
?>