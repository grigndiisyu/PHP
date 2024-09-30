<?php
function hitungKompensasi($jamKerja, $jamKerjaNormal = 8) {
    $jamLembur = max(0, $jamKerja - $jamKerjaNormal);
    //max(0, $jamKerja - $jamKerjaNormal) memastikan bahwa jam lembur tidak bisa bernilai negatif. Jika pekerja bekerja lebih dari jam kerja normal (8 jam), selisihnya dihitung sebagai lembur, namun jika kurang dari atau sama dengan 8 jam, jam lembur akan menjadi 0.
if ($jamLembur > 0) {
    $kompensasi = 50000; 
    //JD KALO jam lemburnya lebih dr 0 dapet kopmensasi 50000/jam
    if ($jamLembur >= 1) {
      $kompensasi += ($jamLembur - 1 ) * 25000;
      //Jika pekerja lembur lebih dari 1 jam, untuk setiap jam lembur setelah jam pertama, pekerja akan mendapat tambahan Rp 25.000 per jam.
// Misalnya, jika pekerja bekerja 14 jam (berarti lembur 6 jam):
// Kompensasi untuk jam pertama: Rp 50.000
// Kompensasi untuk 5 jam lembur tambahan: 5 * Rp 25.000 = Rp 125.000
// Total kompensasi: Rp 50.000 + Rp 125.000 = Rp 175.000

    } else {
    $kompensasi = 0;
    }

    return [
    'jam_kerja' => $jamKerja,
    'jam_lembur' => $jamLembur,
    'kompensasi' => $kompensasi
    ];
    }
}

$jamKerja = 14;
$hasil = hitungKompensasi($jamKerja);

echo "Jam Kerja : " . $hasil['jam_kerja'] . " Jam <br>";
echo "Jam Lembur : " . $hasil['jam_lembur'] . " Jam <br>";
echo "Jumlah Kompensasi : Rp " . number_format($hasil['kompensasi'], 0, ',', '.') . "<br>";
?>