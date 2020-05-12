<?php
session_start();

if (isset($_SESSION["username"])){
    header("Location: login.php");
    exit();

    require 'functions.php';

    // ambil id dari url admin.php
    $id = $_GET['id'];

    //query mahasiswa berdasarkan id
    $alm = query("SELECT * FROM alat_musik WHERE id = $id")[0];
    // var_dump($alm);

    //memastikan kalau tombol ubah sudah ditekan
    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Ubah Data Alat Musik</h3>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $alm['id']?>">
    <ul>
        <li>    
            <label for="nama">NAMA : </label><br>
            <input type="text" name = "Nama_alat" id="nama"  required value="<?= $alm['Nama_alat']?>" ><br><br>
        </li>
        <li>
            <label for="asal">ASAL : </label><br>
            <input type="text" name = "asal" id="asal" required value="<?= $alm['asal']?>"><br><br>
        </li>
        <li>
            <label for="Cara_dimainkan">CARA DIMAINKAN : </label><br>
            <input type="text" name = "cara_dimainkan" id="Cara_dimainkan" required value="<?= $alm['cara_dimainkan']?>"><br><br>
        </li>
        <li>
            <label for="fungsi">FUNGSI : </label><br>
            <input type="text" name = "fungsi" id="fungsi" required value="<?= $alm['fungsi']?>"><br><br>
        </li>
        <li>
            <label for="foto">FOTO : </label><br>
            <input type="text" name = "img" id="foto" required value="<?= $alm['img']?>"><br><br>
        </li>
        <li>
            <br>
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>