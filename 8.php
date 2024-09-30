<?php
function hitungAngka($data, $cari) {
    $jumlah = 0;
    foreach ($data as $angka) {
        if ($angka == $cari) {
            $jumlah++;
        }
    }
    return $jumlah;
}

$data = [80, 90, 100, 85, 100, 66];
$cari = 100;
$jumlah = hitungAngka($data, $cari);
echo "Jumlah angka $cari = $jumlah";
?>   