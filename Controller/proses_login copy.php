<?php
include ("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $query = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' and password = '$password'");

        if (mysqli_num_rows($query) > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['user'] = "login";
            header("location:view_dashboard.php");
        } else {
            $_SESSION['error'] = "Username atau Password Anda Salah";
            header("location:view_login.php?app=gagal");
        }
    } else {
        header("location:view_login.php?app=error");
    }
}
?>