<?php

function compareNames($name1, $name2) {
    $length1 = strlen($name1);
    $length2 = strlen($name2);

    echo "Nama pertama: $name1\n <br>";
    echo "Nama kedua: $name2\n <br>";

if ($length1 > $length2) {
    $diff = $length1 - $length2;
    echo "$name1 memiliki jumlah karakter lebih banyak dari $name2 : selisihnya $diff karakter\n";
    } elseif ($length2 > $length1) {
    $diff = $length2 - $length1;
    echo "$name2 memiliki jumlah karakter lebih banyak dari $name1 : selisihnya $diff karakter\n";
    } else {
    echo "Kedua nama memiliki jumlah karakter yang sama\n";
    }
}

compareNames("Hafizh", "Muhammad rahmat");

?>