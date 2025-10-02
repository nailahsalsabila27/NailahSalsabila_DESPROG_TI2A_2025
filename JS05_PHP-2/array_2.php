<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style_array2.css">
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            // echo "Nama : {$Dosen ['nama']} <br>";
            // echo "Domisili : {$Dosen ['domisili']} <br>";
            // echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

            echo "<h2>Data Dosen</h2>";
            echo "<table>";
            foreach ($Dosen as $key => $value) {
                echo "<tr><th>{$key}</th><td>{$value}</td></tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>