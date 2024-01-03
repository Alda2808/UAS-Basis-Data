<?php
include("connection.php");

// cek tombol daftar
if(isset($_POST['add'])){

    $program_studi               = $_POST['program_studi'];
    $kode                        = $_POST['kode'];
    $mata_kuliah                 = $_POST['mata_kuliah'];
    $sks                         = $_POST['sks'];
    $deskripsi_matkul            = $_POST['deskripsi_matkul'];
    $semester                    = $_POST['semester'];

    // buat query
    $sql1 = "INSERT INTO db_add (program_studi, kode, mata_kuliah, sks, deskripsi_matkul, semester) VALUE ('$program_studi','$kode','$mata_kuliah','$sks','$deskripsi_matkul', '$semester')";
    $query1 = mysqli_query($connect, $sql1);

    // query simpan sudah berhasil
    if( $query1) {
        // kalau sudah berhasil menampilkan status=sukses
        header('Location:List1.php?status=sukses');
    }else {
        // kalau gagal menampilkan status=gagal
        header('Location:dashboard.php?status=gagal');
    }
}else {
    die("Akses dilarang...");
}
?>