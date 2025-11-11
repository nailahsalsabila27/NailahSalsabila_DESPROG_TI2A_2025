<?php
//lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";
//periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if ($_FILES['images']['name'][0]) {
    $totalFiles = count($_FILES['images']['name']);

    for ($i=0; $i < $totalFiles ; $i++) { 
        $fileName = $_FILES['images']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        //pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
            echo "file $fileName berhasil diunggah. <br>";
        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }        
    }
} else {
    echo "tidak ada file yang diunggah";
}
?>