<?php 
  // 1. Membuat Array 
  $buah = ['Jeruk', 'Belimbing', 'Jeruk'];
  // var_dump($buah);

  // mengakses elemen pd array asociative
  $mahasiswa = [
    "nama" => "Farhan Kebab",
    "kampus" => "Universitas Negeri Garut"
  ];

  echo $buah[0];

  echo "<br>";


  echo $mahasiswa['nama'];

  echo "<br>";
  echo "<br>";


  // menambahkan data ke array

  $buah[] = 'Durian';
  $buah[] = 'Muncang';

  // var_dump($buah);

  echo "<br>";
  echo "<br>";
  
  $buah[4] = 'Jengkol';

  echo "Array setelah di ubah nilai nya : ";

  var_dump($buah);

  unset($buah[4]);

  echo "<br>";
  echo "<br>";

  $buah[] = 'Kucubung';

  var_dump($buah);


  // menghitung jumlah elemen pd array

  echo "Jumlah elemen pada array adalah" . " " .count($buah) . " element";

  $mobil = ['Toyota', 'Honda', 'BMW'];
  $motor = ['Yamaha', 'Suzuki', 'Kawasaki'];

  $gabungan = array_merge($mobil, $motor);

  echo "<br>";
  echo "<br>";

  var_dump($gabungan);

  echo "<br>";
  echo "<br>";

  echo "<br>";
  echo "<br>";

  $pemain = [
    [
      "nama" => "Thom Haye",
      "posisi" => "Gelandang Bertahan"
    ],
    [
      "nama" => "Jordi Amat",
      "posisi" => "Bek Tengah"
    ],
    [
      "nama" => "Shayne Pattynama",
      "posisi" => "Bek Kiri"
    ],
    [
      "nama" => "Marselino Ferdinan",
      "posisi" => "Gelandang Serang"
    ],
    [
      "nama" => "Rafael Struick",
      "posisi" => "Penyerang"
    ]
  ];


  foreach($pemain as $p) {
    if(array_key_exists('posisi', $p)) {
      echo "key 'posisi' ADA dalam array";
      echo "<br>";
    } else {
      echo "key 'posisi' TIDAK ADA dalam array";
    }
  }
  
  // menngambil semua nilai dari array;

  $mahasiswa = ["nama" => "Naruto", "Umur" => 20];
  $values = array_values($mahasiswa);
  var_dump($values);
  echo gettype($values);
?>