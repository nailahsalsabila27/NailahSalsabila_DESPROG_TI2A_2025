<?php
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key nya kosong
$usia = @$_GET['usia'];
echo "halo {$nama}! apakah benar anda berusia {$usia} tahun?";
?>