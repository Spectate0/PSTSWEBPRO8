<?php
$host = "localhost";
$userdb = "root";
$passdb = "";
$db = "pstswebpro8";
$conn = mysqli_connect($host, $userdb, $passdb, $db);    

if(mysqli_connect_errno()) {
    echo "Kesalahan Koneksi : " . mysqli_connect_error();
    exit();
}