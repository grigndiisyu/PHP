<?php

$string = "selamat ulangtahun ke 17"; 
//membuat variabel string yg isinya slmt ylktk k 17
if (preg_match('/\d/', $string)) {
  //mencari apakah ada angka dalam string.
  $angka = array();
  //membuat array kosong untuk menampung hasil pencarian angka dari string.
  preg_match_all('/\d/', $string, $angka);
  //mencari semua karakter angka (\d) dalam string dan menyimpannya ke array $angka.
  echo "Teks mengandung angka : " . implode('. ', $angka[0]);
  //implode untuk pemisah
} else {
  echo "Teks tidak mengandung angka";
  //jd kl gada angka di string  maka hasil cetaknya akan keluar tks tdk mengngng angka
}

?>