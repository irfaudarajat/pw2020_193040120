<?php
    require 'functions.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Tambah Data Alat Musik</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="Nama_alat">NAMA : </label><br>
            <input type="text" name = "Nama_alat" id="nama" required><br><br>
        </li>
        <li>
            <label for="asal">ASAL : </label><br>
            <input type="text" name = "asal" id="asal" required><br><br>
        </li>
        <li>
            <label for="cara_dimainkan">CARA DIMAINKAN : </label><br>
            <input type="text" name = "cara_dimainkan" id="Cara_dimainkan" required><br><br>
        </li>
        <li>
            <label for="fungsi">FUNGSI : </label><br>
            <input type="text" name = "fungsi" id="fungsi" required><br><br>
        </li>
        <li>
            <label for="img">FOTO : </label><br>
            <input type="text" name = "img" id="foto" required><br><br>
        </li>
        <li>
            <br>
            <button  type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>