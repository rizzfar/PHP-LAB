<?php
function tampilkanGet() {
    if (!empty($_GET)) {
        echo "Data GET: <br>";
        foreach ($_GET as $key => $value) {
            echo "$key: $value <br>";
        }
    } else {
        echo "Tidak ada data GET.";
    }
}

tampilkanGet();
?>