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

    //melakukan koneksi ke database
    $conn = mysqli_connect("localhost" , "root" , "") or die("Koneksi ke DB Gagal");

    //Memilih Database
    mysqli_select_db($conn, "pw_193040120") or die("Database Salah!");

    //query mengambil object dari table didalam database
    $result = mysqli_query($conn, "SELECT * FROM Alat_Musik");
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
    <?php while($row = mysqli_fetch_assoc($result)) :  ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><img src= "assets/img/<?= $row["img"]; ?>"></td>
            <td><?= $row["Nama_alat"]?></td>
            <td><?= $row["asal"]?></td>
            <td><?= $row["cara_dimainkan"]?></td>
            <td><?= $row["fungsi"]?></td>
        </tr>
    <?php $i++?>
    <?php endwhile; ?>
</table>
</body>