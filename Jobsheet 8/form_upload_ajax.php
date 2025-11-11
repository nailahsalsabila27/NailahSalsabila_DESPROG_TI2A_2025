<!-- <!DOCTYPE html>
<html>
    <head>
        <title>unggah file dokumen</title>
    </head>
    <body>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Multi Upload Gambar dengan AJAX</title>
</head>
<body>
    <h2>Unggah Beberapa Gambar</h2>
    <form id="upload_form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" id="images" multiple accept=".jpg, .jpeg, .png, .gif">
        <input type="submit" value="Unggah Gambar">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="images[]" id="file" class="file-input" multiple>
                <label for="file" class="file-label">Pilih File</label>
            </div>

            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>

        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>
