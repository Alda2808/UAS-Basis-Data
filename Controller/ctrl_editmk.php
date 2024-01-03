<?php
// Koneksi database
include("connection.php");


// Menangkap data yang dikirim dari form
$id_data            = $_POST['id_data'];
$program_studi      = $_POST['program_studi'];
$kode               = $_POST['kode'];
$mata_kuliah        = $_POST['mata_kuliah'];
$sks                = $_POST['sks'];
$deskripsi_matkul   = $_POST['deskripsi_matkul'];
$semester           = $_POST['semester'];

// Update data ke database
$sql = "UPDATE db_add SET 
        program_studi='$program_studi',
        kode='$kode',
        mata_kuliah='$mata_kuliah',
        sks='$sks',
        deskripsi_matkul='$deskripsi_matkul',
        semester='$semester'
        WHERE id_data='$id_data'";

$query = mysqli_query($connect, $sql);

// Cek apakah query berhasil dijalankan
if ($query) {
    echo '<script language="javascript">alert("Update Berhasil!"); document.location="List1.php";</script>';
} else {
    echo "Error: " . mysqli_error($connect); // Ini bisa digunakan untuk debugging
}
?>
