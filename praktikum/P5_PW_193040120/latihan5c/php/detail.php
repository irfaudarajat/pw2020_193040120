<?php
//mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET["id"])) {
    header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang mengambil dari url
$Musik  = query("SELECT * FROM alat_musik WHERE id = $id")[0];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $Musik["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $Musik['Nama_alat'] ?></p>
            <p><?= $Musik['asal'] ?></p>
            <p><?= $Musik['cara_dimainkan'] ?></p>
            <p><?= $Musik['fungsi'] ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>