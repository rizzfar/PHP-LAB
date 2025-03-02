<?php 
  $angka = [3, 1, 4, 2];
  sort($angka);
  print_r($angka);

  // mencari nilai dalam array

  $sayuran = [
    "Bayam",
    "Kangkung",
    "Sawi",
    "Kol",
    "Terong",
    "Tomat",
    "Wortel",
    "Labu Siam",
    "Buncis",
    "Daun Singkong"
];

$inputUser = 'Bayam';
if (in_array($inputUser, $sayuran)) {
  echo "$inputUser ada di dalam array";
} else {
  echo "$inputUser tidak ada di dalam array";
}

echo "<br>";
echo "<br>";
echo "<br>";

//menghapus nilai duplikasi
$angka = [1, 2, 2, 3, 4, 4];
$hapusDuplikasi = array_unique($angka);
print_r($hapusDuplikasi);
echo count($hapusDuplikasi);

?>