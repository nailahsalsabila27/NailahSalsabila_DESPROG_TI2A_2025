<!-- <?php
// if (isset($_FILES['file'])) {
//     $errors = array();
//     $file_name = $_FILES['file']['name'];
//     $file_size = $_FILES['file']['size'];
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])). "");
//     $extensions = array("pdf", "doc", "docx", "txt");

//     if (in_array($file_ext, $extensions) === false) {
//         $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
//     }

//     if ($file_size > 2097152) {
//         $errors[] = "ukuran file tidak boleh lebih dari 2 MB";
//     }

//     if (empty($errors) ==  true) {
//         move_uploaded_file($file_tmp, "documents/". $file_name);
//         echo "file berhasil diunggah";
//     } else {
//         echo implode(" ", $errors);
//     }
    
// }
?> -->

<?php
if (!empty($_FILES['images']['name'][0])) {

    $allowedExt = array("jpg", "jpeg", "png", "gif");
    $targetDir = "gallery/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $totalFiles = count($_FILES['images']['name']);
    $output = "";

    for ($i = 0; $i < $totalFiles; $i++) {

        $fileName = $_FILES['images']['name'][$i];
        $fileTmp = $_FILES['images']['tmp_name'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (in_array($fileExt, $allowedExt)) {

            $targetFile = $targetDir . $fileName;

            if (move_uploaded_file($fileTmp, $targetFile)) {
                $output .= "Gambar $fileName berhasil diunggah.<br>";
                $output .= "<img src='$targetFile' width='120' style='margin:5px; height:auto;'><br>";
            } else {
                $output .= "Gagal mengunggah gambar $fileName.<br>";
            }

        } else {
            $output .= "File $fileName ditolak (bukan file gambar).<br>";
        }
    }

    echo $output;
} else {
    echo "Tidak ada file gambar yang diunggah.";
}
?>
