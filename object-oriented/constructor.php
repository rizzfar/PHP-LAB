<?php 
  class Mobil {
    public $merk;
    public $warna;
    public $maxSpeed;

    public function __construct($merk, $warna, $maxSpeed) {
      $this -> merk = $merk;
      $this -> warna = $warna;
      $this -> maxSpeed = $maxSpeed;
    
      echo "Mobil dengan merk $merk, warna ($warna) dengan kecepatan maksimal $maxSpeed. <br>";
    }
  }

  $mobilSaya = new Mobil("Toyota", "Merah Jambu", 200);
  echo "Merk Mobil : $mobilSaya->merk <br>";
  echo "Warna Mobil : $mobilSaya->warna  <br>";
  echo "Kecepatan maksimal Mobil : $mobilSaya->maxSpeed  <br>";
?>

