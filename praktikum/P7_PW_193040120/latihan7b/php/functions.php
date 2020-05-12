<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "pw_193040120") or die("Database Salah!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $foto           = htmlspecialchars($data['foto']);
    $nama           = htmlspecialchars($data['Nama_alat']);
    $asal           = htmlspecialchars($data['asal']);
    $Cara_dimainkan    = htmlspecialchars($data['cara_dimainkan']);
    $fungsi         = htmlspecialchars($data['fungsi']);

    $query = "INSERT INTO alat_musik
                VALUES 
                ('','$foto','$nama','$asal','$Cara_dimainkan' , '$fungsi')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id             = $data['id'];
    $foto           = htmlspecialchars($data['img']);
    $nama           = htmlspecialchars($data['Nama_alat']);
    $asal            = htmlspecialchars($data['asal']);
    $Cara_dimainkan  = htmlspecialchars($data['cara_dimainkan']);
    $fungsi         = htmlspecialchars($data['fungsi']);

    $query = "UPDATE alat_musik SET
            foto = '$foto',
            nama = '$nama',
            asal = '$asal',
            Cara_dimainkan = '$Cara_dimainkan',
            fungsi = '$fungsi'
            WHERE id = $id

    ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}


// fungctions untuk registrasi
function registrasi($data){
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES ('' , '$username' , '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}



?>