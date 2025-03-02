<?php
$kategori = ["A", "B", "C", "D", "E"];

foreach ($kategori as $k) {
    switch ($k) {
        case "A":
            echo "Kategori: $k, Deskripsi: Sangat Baik <br>";
            break;
        case "B":
            echo "Kategori: $k, Deskripsi: Baik <br>";
            break;
        case "C":
            echo "Kategori: $k, Deskripsi: Cukup <br>";
            break;
        case "D":
            echo "Kategori: $k, Deskripsi: Kurang <br>";
            break;
        case "E":
            echo "Kategori: $k, Deskripsi: Sangat Kurang <br>";
            break;
        default:
            echo "Kategori tidak valid <br>";
    }
}
?>