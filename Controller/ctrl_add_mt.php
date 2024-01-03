<?php
include("connection.php");

// cek tombol daftar
if(isset($_POST['tambah'])){

    $judul_materi               = $_POST['judul_materi'];
    $deskripsi                  = $_POST['deskripsi'];
    $indikator                  = $_POST['indikator'];
    $metode_pembelajaran        = $_POST['metode_pembelajaran'];
    $Penilaian                  = $_POST['Penilaian'];

    // buat query
    $sql1 = "INSERT INTO db_add_mt (judul_materi, indikator, deskripsi, metode_pembelajaran, Penilaian) VALUE ('$judul_materi','$indikator','$deskripsi','$metode_pembelajaran','$Penilaian')";
    $query1 = mysqli_query($connect, $sql1);

    // query simpan sudah berhasil
    if( $query1) {
        // kalau sudah berhasil menampilkan status=sukses
        header('Location:list_materi.php?status=sukses');
    }else {
        // kalau gagal menampilkan status=gagal
        header('Location:dashboard.php?status=gagal');
    }
}else {
    die("Akses dilarang...");
}
?>