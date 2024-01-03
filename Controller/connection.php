<?php
$namaServer = "localhost";
$namaUser = "root";
$namaPass = "";
$namaDb = "basisdata";

$connect = mysqli_connect($namaServer, $namaUser, $namaPass, $namaDb);

if(!$connect) {
    die("Problem :" . mysqli_connect_error());
}else{
}