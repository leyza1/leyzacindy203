<?php
$nama = "Budi";
$umur = 17;
$tinggi = 170.5;
$siswa_sma = true;
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Tinggi: " . $tinggi . " cm<br>";
echo "Siswa SMA: " . ($siswa_sma ? "Ya" : "Tidak") . "<br>";
var_dump($nama);
var_dump($umur);
var_dump($tinggi);
var_dump($siswa_sma);
?>