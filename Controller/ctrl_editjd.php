<?php
// Koneksi database
include("connection.php");


// Menangkap data yang dikirim dari form
$hari             = $_POST['hari'];
$waktu            = $_POST['waktu'];
$ruang            = $_POST['ruang'];
$matkul           = $_POST['matkul'];
$prodi            = $_POST['prodi'];

// Update data ke database
$sql = "UPDATE db_add_jadwal SET 
        hari='$hari',
        waktu ='$waktu ',
        ruang  ='$ruang  ',
        matkul ='$matkul',
        prodi  ='$prodi  '
        WHERE id='$id'";

$query = mysqli_query($connect, $sql);

// Cek apakah query berhasil dijalankan
if ($query) {
    echo '<script language="javascript">alert("Update Berhasil!"); document.location="view_jadwal.php";</script>';
} else {
    echo "Error: " . mysqli_error($connect); // Ini bisa digunakan untuk debugging
}
?>
