<?php
// menghubungkan dengan file php lainya
session_start();

if (isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
require 'functions.php';
// melakukan query
$alat_musik = query ( "SELECT * FROM  alat_musik" );

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $alat_musik = query("SELECT * FROM alat_musik WHERE
                foto LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                sumber_bunyi LIKE '%$keyword%' OR
                Cara_pakai LIKE '%$keyword%' OR
                fungsi LIKE '%$keyword%'  ");
} else {
    $alat_musik = query("SELECT * FROM alat_musik");
}


?>

<html>
<head>
    <title>Latihan6e</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <div class="add">
        <button class="btn-primary"> <a  href="tambah.php">Tambah Data</a></button>
    </div> 

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
   


    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>Nama Alat</th>
            <th>Asal</th>
            <th>Cara dimainkan</th>
            <th>Fungsi</th>
        </tr>


    <?php if(empty($alat_musik)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
        </td>
    </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($alat_musik as $alm) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $alm['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $alm['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $alm['img']?>" alt=""></td>
                <td><?= $alm['Nama_alat']?></td>
                <td><?= $alm['asal']?></td>
                <td><?= $alm['cara_dimainkan']?></td>
                <td><?= $alm['fungsi']?></td>
            </tr>

            <?php $i++;?>
        <?php endforeach;?>
    <?php endif;?>
    </table>

</body>
</html>