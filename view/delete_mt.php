<?php 
// koneksi database
include("connection.php");

// menangkap data id yang dikirim dari URL
$id_materi = $_GET['id_materi'];

// menghapus data dari database
$sql = "DELETE FROM db_add_mt WHERE id_materi='$id_materi'";
$query = mysqli_query($connect, $sql);

// cek apakah query berhasil dijalankan
if ($query) {
    echo '<script language="javascript">alert("Hapus Berhasil!"); document.location="list_materi.php";</script>';
} else {
    echo "Error: " . mysqli_error($connect); // Ini bisa digunakan untuk debugging
}
?>