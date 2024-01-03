<?php
include("connection.php");

    // ambil data dari form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // buat query
    $sql = "INSERT INTO user (nama, username, password) VALUES ('$nama','$username','$password')";
    $query = mysqli_query($connect, $sql);

    //query simpan sudah berhasil
    if( $query ){
        // kalum berhasil menampilkan status=sukses
        echo '<script language="javascript">alert("Berhasil Melakukan Registerasi!!!");
    document.location="view_login.php";</script>';
        exit;
    } else {
        echo "gagal";
        exit;
    }
