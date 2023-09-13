<?php
include("parsial/header.php");
if(!isset($_SESSION['Username'])) {
    echo "<script>window.open('customer.php','_self')</script>";
}
else {
    include("parsial/functions.php");
    include("parsial/navbar.php");
?>
<div class="row g-4">
    <div class='col-lg-4 col-sm-6'>
        <?php include 'parsial/sidebar.php';?> 
    </div>
    <div class='col-lg-8 col-sm-6'>
    <?php
    if(isset($_GET['order_saya'])) {
        include("ordersaya.php");}

    if(isset($_GET['edit_akun'])) {
        include("editakun.php");
    }

    if(isset($_GET['ganti_password'])) {
        include("gantipassword.php");
    }
    if(isset($_GET['hapus_akun'])) {
        include("hapusakun.php");
    }
    ?>
    </div>
</div>
<?php
include("parsial/footer.php");
}
?>