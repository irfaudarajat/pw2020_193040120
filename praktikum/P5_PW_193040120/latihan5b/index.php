<html>
<head>
    <title>Tugas</title>
    <style>
        img{ width:150px; padding:20px; }
        td{ text-align : center; }
    </style>
</head>
<body>

<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $Musik = query("SELECT * FROM alat_musik");
   
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO</th>
        <th>Foto</th>
        <th>Nama Alat</th>
        <th>Asal</th>
        <th>Cara dimainkan</th>
        <th>Fungsi</th>
    </tr>

    <?php $i = 1?>
    <?php foreach ($Musik as $msk) :  ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src= "assets/img/<?= $msk["img"]; ?>"></td>
            <td><?= $msk["Nama_alat"]?></td>
            <td><?= $msk["asal"]?></td>
            <td><?= $msk["cara_dimainkan"]?></td>
            <td><?= $msk["fungsi"]?></td>
        </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
</table>
</body>