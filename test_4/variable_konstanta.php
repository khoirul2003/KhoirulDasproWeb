<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil";

$benar = true;
$salah = false;
echo "Variable benar: $benar, variabel slaah: $salah";

define("NAMA_SITUS", "websiteku.com");
define("TAHUN_TERBIT", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun ". TAHUN_TERBIT . ".";
?>