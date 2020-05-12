<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $Musik = query("SELECT * FROM alat_musik");
   
?>

<html>
<head>
    <title>Tugas</title>
    <style>
        img{ width:150px; padding:20px; }
        td{ text-align : center; }
    </style>
</head>
<body>

    <div class="container">
        <?php foreach ($Musik as $msk) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $msk['id'] ?>">
                    <?= $msk["Nama_alat"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>

</body>
</html>