<?php 
$students=[
    [
        'nama' => 'Andi',
        'nilai' => [80,78,82,78,88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86,70,80,85,81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83,91,70,73,81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89,85,84,86,88],
    ],
    ];

    $totalRataRata = 0;
$jumlahSiswa = count($students);

foreach ($students as $student) {
    // Hitung total nilai siswa
    $totalNilai = array_sum($student['nilai']);
    //array sum untuk menjumlakan semua nilai
    // Hitung rata-rata nilai siswa
    $rataRataSiswa = $totalNilai / count($student['nilai']);
    
    // Tampilkan hasil rata-rata siswa
    echo "Rata-rata nilai untuk " . $student['nama'] . " adalah " . number_format($rataRataSiswa, 1) . "<br>";
    
    // Tambahkan rata-rata siswa ke total rata-rata
    $totalRataRata += $rataRataSiswa;
}