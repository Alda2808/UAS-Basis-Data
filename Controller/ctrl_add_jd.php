<?php
include("connection.php");

// cek tombol daftar
if(isset($_POST['input'])){

    $hari             = $_POST['hari'];
    $waktu               = $_POST['waktu'];
    $ruang             = $_POST['ruang'];
    $matkul    = $_POST['matkul'];
    $prodi                  = $_POST['prodi'];

    // buat query
    $sql1 = "INSERT INTO db_add_jadwal (hari, waktu, ruang, matkul, prodi) VALUE ('$hari','$waktu ','$ruang ','$matkul','$prodi')";
    $query1 = mysqli_query($connect, $sql1);

    // query simpan sudah berhasil
    if( $query1) {
        // kalau sudah berhasil menampilkan status=sukses
        header('Location:view_jadwal.php?status=sukses');
    }else {
        // kalau gagal menampilkan status=gagal
        header('Location:view_dashboard.php?status=gagal');
    }
}else {
    die("Akses dilarang...");
}
?>