<?php 
session_start();
include 'admin_area/parsial/database.php';

if(isset($_GET['ID'])) {
    $propertiID = $_GET['ID'];
    $getProperti = "SELECT * From tbl_properti where ID='$propertiID'";
    $runProperti = mysqli_query($koneksi,$getProperti);
        $rowData = mysqli_fetch_array($runProperti);
        $Number = $rowData['ID'];
        $propertiID = $rowData['Property_ID'];
        $IDTipe = $rowData['Tipe_properti'];
        $namaProperti = $rowData['Nama_properti'];
        $alamatProperti = $rowData['Alamat_properti'];
        $hargaProperti = $rowData['Harga_properti'];
        $tahunDibangun = $rowData['Tahun_dibangun'];
        $ukuranProperti = $rowData['Ukuran_properti'];
        $jumlahKamarTidur = $rowData['Jumlah_kamar_tidur'];
        $jumlahkamarMandi = $rowData['Jumlah_kamar_mandi'];
        $jumlahGarasi = $rowData['Jumlah_Garasi'];
        $ukuranGarasi = $rowData['Ukuran_garasi'];
        $gambarProperti1 = $rowData['Gambar_properti1'];
        $gambarProperti2 = $rowData['Gambar_properti2'];
        $gambarProperti3 = $rowData['Gambar_properti3'];
        $gambarProperti4 = $rowData['Gambar_properti4'];
        $gambarProperti5 = $rowData['Gambar_properti5'];
        $gambarProperti6 = $rowData['Gambar_properti6'];
        $deksripsiProperti = $rowData['Deksripsi_properti'];
        $statusProperti = $rowData['Status_properti'];
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT.KARYA CIPTA TIRTA MURNI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="fontawesome-free-5.10.0-web/css/all.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
</head>