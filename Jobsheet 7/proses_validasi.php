<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    if (empty($nama)) $errors[] = "Nama harus diisi.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";
    if (strlen($password) < 8) $errors[] = "Password minimal 8 karakter.";

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo $err . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>
