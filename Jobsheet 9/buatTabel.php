<?php
include 'koneksi.php';

$sql = "CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>