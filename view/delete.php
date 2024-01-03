<?php 
// koneksi database
include("connection.php");

// menangkap data id yang dikirim dari URL
$id_data = $_GET['id_data'];

// menghapus data dari database
$sql = "DELETE FROM db_add WHERE id_data='$id_data'";
$query = mysqli_query($connect, $sql);

// cek apakah query berhasil dijalankan
if ($query) {
    echo '<script language="javascript">alert("Hapus Berhasil!"); document.location="List1.php";</script>';
} else {
    echo "Error: " . mysqli_error($connect); // Ini bisa digunakan untuk debugging
}
?>