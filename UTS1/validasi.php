<?php
$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
$telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
$email   = isset($_POST['email']) ? $_POST['email'] : '';
$alamat  = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$komentar= isset($_POST['komentar']) ? $_POST['komentar'] : '';
$bunga   = isset($_POST['bunga']) ? $_POST['bunga'] : [];

$total = 0;

foreach ($bunga as $kode) {
  $kodeNum = (int)$kode; // ubah ke angka biar bisa dibandingkan

  if ($kodeNum >= 1 && $kodeNum <= 5) {
    $total += 500000;
  } elseif ($kodeNum >= 6 && $kodeNum <= 9) {
    $total += 650000;
  } elseif ($kodeNum >= 10 && $kodeNum <= 11) {
    $total += 700000;
  } elseif ($kodeNum >= 12 && $kodeNum <= 15) {
    $total += 800000;
  } elseif ($kodeNum >= 16 && $kodeNum <= 20) {
    $total += 1000000;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validasi Pemesanan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
  <div class="header-inner">
    <img src="img/imgUTS/logo1.png" class="logo-header" alt="Logo">
    <div class="brand">
      <h1>CA'FLEUR</h1>
      <span class="tag">made with love, sent with petals</span>
    </div>
  </div>
</header>
  <main class="container-validasi">
    <h2 class="section-title validation">Konfirmasi Pemesanan</h2>

    <div class="validation-box">
    <ul>
      <li><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></li>
      <li><strong>Telepon:</strong> <?= htmlspecialchars($telepon) ?></li>
      <li><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
      <li><strong>Alamat:</strong> <?= htmlspecialchars($alamat) ?></li>
      <li><strong>Komentar:</strong> <?= htmlspecialchars($komentar) ?></li>
      <li><strong>Bunga Dipilih:</strong> <?= implode(", ", $bunga) ?></li>
      <li><strong>Total Harga:</strong> Rp <?= number_format($total, 0, ',', '.') ?></li>
    </ul>
  </div>

    <form action="thanks.php" method="post">
      <input type="hidden" name="nama" value="<?= htmlspecialchars($nama) ?>">
      <button type="submit" class="btn">Konfirmasi</button>
    </form>
  </main>
</body>
</html>