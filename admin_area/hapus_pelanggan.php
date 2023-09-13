<?php
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
if(isset($_GET['hapus_pelanggan'])) {
    $deleteID = $_GET['hapus_pelanggan'];
    $deleteData = "DELETE FROM tbl_customer where ID='$deleteID'";
    $runDelete = mysqli_query($koneksi,$deleteData);
    if($runDelete) {
        echo "<script>alert('Pelanggan berhasil dihapus')</script>";
        echo "<script>window.open('index.php?lihat_pelanggan','_self')</script>";
    }
}
}
?>