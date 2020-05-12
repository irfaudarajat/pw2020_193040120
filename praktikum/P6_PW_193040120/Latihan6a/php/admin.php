<?php

// menghubungkan dengan file php lainya
require 'functions.php';

// melakukan query
$mahasiswa = query ( "SELECT * FROM  alat_musik" );

?>

<html>
<head>
    <title>Latihan6a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $mhs['foto']?>" alt=""></td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['asal']?></td>
                <td><?= $mhs['Cara_dimainkan']?></td>
                <td><?= $mhs['fungsi']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>