<?php
// --- kode PHP taruh di sini (paling atas) ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $bunga = isset($_POST['bunga']) ? $_POST['bunga'] : [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan - CA'FLEUR</title>
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

<main class="container">
  <h2 class="section-title form">Form Pemesanan</h2>

  <!-- Form Pemesanan -->
  <form action="validasi.php" method="post" id="form-card">
    <div class="form-row">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" required>
    </div>

    <div class="form-row">
      <label>Nomor Telepon</label>
      <input type="text" name="telepon" required>
    </div>

    <div class="form-row">
      <label>Email</label>
      <input type="text" name="email" required>
    </div>

    <div class="form-row">
      <label>Alamat Pengiriman</label>
      <textarea name="alamat" required></textarea>
    </div>
    
    <div class="form-row">
      <label>Komentar</label>
      <textarea name="komentar" required></textarea>
    </div>

    <!-- 🌸 Bagian ini menampilkan bunga yang dikirim dari halaman Home -->
    <?php if (!empty($bunga)): ?>
      <div class="form-row">
        <label>Bunga yang kamu pilih:</label>
        <ul>
          <?php foreach ($bunga as $b): ?>
          <?php 
            // Ambil angka dari "bucket01" hasilnya "01", menghiraukan kata bucket
            $nomor = preg_replace('/[^0-9]/', '', $b);
          ?>
          <li>
            <img src="img/imgUTS/<?= $nomor ?>.jpeg" alt="<?= htmlspecialchars($b) ?>" width="100px">
            <p><?= htmlspecialchars($b) ?></p>
          </li>
          <input type="hidden" name="bunga[]" value="<?= htmlspecialchars($b) ?>">
        <?php endforeach; ?>
        </ul>
      </div>
    <?php else: ?>
      <p class="form-row">Belum ada bunga yang dipilih.</p>
    <?php endif; ?>

    <div class="form-actions">
      <button type="submit" class="btn">Lanjutkan</button>
    </div>
  </form>
</main>
<script src="script.js"></script>
</body>
</html>