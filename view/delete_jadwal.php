<?php 
// koneksi database
include("connection.php");

// menangkap data id yang dikirim dari URL
$id = $_GET['id'];

// menghapus data dari database
$sql = "DELETE FROM db_add_jadwal WHERE id='$id'";
$query = mysqli_query($connect, $sql);

// cek apakah query berhasil dijalankan
if ($query) {
    echo '<script language="javascript">alert("Hapus Berhasil!"); document.location="view_jadwal.php";</script>';
} else {
    echo "Error: " . mysqli_error($connect); // Ini bisa digunakan untuk debugging
}
?>