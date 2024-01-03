<?php
// Koneksi database
include("connection.php");


// Menangkap data yang dikirim dari form
$id_materi           = $_POST['id_materi'];
$judul_materi        = $_POST['judul_materi'];
$indikator           = $_POST['indikator'];
$deskripsi           = $_POST['deskripsi'];
$metode_pembelajaran = $_POST['metode_pembelajaran'];
$Penilaian           = $_POST['Penilaian'];

// Update data ke database
$sql = "UPDATE db_add_mt SET 
        judul_materi='$judul_materi',
        indikator='$indikator',
        deskripsi='$deskripsi',
        metode_pembelajaran='$metode_pembelajaran',
        Penilaian='$Penilaian'
        WHERE id_materi='$id_materi'";

$query = mysqli_query($connect, $sql);

// Cek apakah query berhasil dijalankan
if ($query) {
    echo '<script language="javascript">alert("Update Berhasil!"); document.location="list_materi.php";</script>';
} else {
    echo "Error: " . mysqli_error($connect); // Ini bisa digunakan untuk debugging
}
?>
