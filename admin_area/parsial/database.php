<?php

$servername = "localhost";
$database = "properti_rumah";
$username = "root";
$password = "";
 //eksekusi si query dan simpan data di database
 $koneksi = mysqli_connect($servername, $username, $password, $database);
 if(!$koneksi) {
    die("koneksi gagal : " .mysqli_connect_error());
}
//echo "Koneksi Berhasil";
?>