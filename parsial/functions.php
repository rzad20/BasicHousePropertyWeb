<?php

$servername = "localhost";
$database = "properti_rumah";
$username = "root";
$password = "";
 //eksekusi si query dan simpan data di database //
 $db = mysqli_connect($servername, $username, $password, $database);

function getRealIpUser() {
    switch(true) {
        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}
?>