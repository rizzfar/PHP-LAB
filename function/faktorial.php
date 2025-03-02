<?php
function faktorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

$hasil = faktorial(5);
echo "Faktorial dari 5 adalah: $hasil";
?>