<h4 class="text-center mt-5">Yakin menghapus akun?</h4>
<div class="d-flex justify-content-center">
<form action="" method="post">
        <input type="submit" name="Yes" value="Ya , Hapus akun" class="btn btn-danger text-center">
        <input type="submit" name="No" value="Tidak, Pertahankan Akun" class="btn btn-primary text-center">
</form>
</div>

<?php
    $username = $_SESSION['Username'];
    if(isset($_POST['Yes'])) {
        $deletecustomer = "delete from tbl_customer where Username='$username'";
        $runcustomer = mysqli_query($koneksi,$deletecustomer);
        if($runcustomer) {
            session_destroy();
            echo "<script>alert('Berhasil Hapus Akun, Kami Sedih Anda Pergi')</script>";
        
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    if(isset($_POST['No'])){
    
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }

?>