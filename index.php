<?php 
    include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Komentar Anda !</title>
</head>
<body>

    <center>
        <form action="target.php" method="POST">
            <h1>Berikan Penilaian Layanan</h1>
            <label for="">Nama : <input type="text" name="nama"></label><br>
            <label for="">Nim : <input type="text" name="nim"></label><br>
            <label for="">Komentar : </label><br>
            <input type="text" name="komen"><br>
            <input type="submit" value="daftarkomen" id="daftar">
        </form>
    </center>
    
</body>
</html>