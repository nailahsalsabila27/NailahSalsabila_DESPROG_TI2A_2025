<?php
include 'koneksi.php';

$username = "admin";
$password = md5("admin123");

$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>