<?php

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty ($username)&& !empty($password)){
    $query = mysqli_query($connect,"select * from tb_login where username='$username' && password ='$password'");
     //cek dulu baris database
     $result = mysqli_num_rows($query);

    //jika ditemukan garis database
    if($result>0){
         //jika benar
         header("location: dasboard.php");
    }else{
        //jika salah
         header("location : login.php?app:gagal");
    }
}else{
    header("location: login.php?app:error");
}
