<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

//soal 4.7
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahSiswa = 10;

$totalNilai = 0;
for ($i = 0; $i < $jumlahSiswa; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

$max1 = $max2 = $nilaiSiswa[0];
$min1 = $min2 = $nilaiSiswa[0];

for ($i = 0; $i < $jumlahSiswa; $i++) {
    if ($nilaiSiswa[$i] > $max1) {
        $max2 = $max1;
        $max1 = $nilaiSiswa[$i];
    } elseif ($nilaiSiswa[$i] > $max2 || $max1 == $max2) {
        $max2 = $nilaiSiswa[$i];
    }
}

for ($i = 0; $i < $jumlahSiswa; $i++) {
    if ($nilaiSiswa[$i] < $min1) {
        $min2 = $min1;
        $min1 = $nilaiSiswa[$i];
    } elseif ($nilaiSiswa[$i] < $min2 || $min1 == $min2) {
        $min2 = $nilaiSiswa[$i];
    }
}

$totalSetelahBuang = $totalNilai - ($max1 + $max2 + $min1 + $min2);

$rataRata = $totalSetelahBuang / 6;

echo "Total nilai setelah mengabaikan 2 nilai tertinggi & 2 nilai terendah: $totalSetelahBuang <br>";
echo "Rata-rata: $rataRata <br>";

//soal 4.8
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.2 * $hargaProduk;
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Harga produk: Rp {$hargaProduk} <br>";
echo "Diskon: Rp {$diskon} <br>";
echo "Harga yang harus dibayar: Rp {$hargaAkhir} <br>";

//soal 4.9
$poin = 700;

echo "Total skor pemain adalah: {$poin} <br>";
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah} <br>";
?>