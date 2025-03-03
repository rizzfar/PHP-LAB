<?php 
  class Mobil {
    public $merk;
    private $harga;
    protected $tahun;

    public function setHarga($harga) {
      $this->harga = $harga;
    }

    public function getHarga() {
      return $this->harga;
    }

    public function getMerk() {
      return $this->merk;
    }
  } 

  $mobilSaya = new Mobil();
  $mobilSaya->merk = 'Toyota';
  $mobilSaya->setHarga(2000);
  echo $mobilSaya->getHarga() . "<br>";
  echo $mobilSaya->getMerk();

?>