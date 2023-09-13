<?php 
session_start();
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
include 'parsial/database.php';
include 'parsial/header.php';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <?php 
            include("parsial/sidebar.php"); 
            if(isset($_GET['properti_dijual'])) {
                include("properti_dijual.php");
            }
            if(isset($_GET['dashboard'])) {
                include("dashboard.php");
            }
            if(isset($_GET['tambah_dijual'])) {
                include("tambah_properti_dijual.php");
            }
            if(isset($_GET['edit_properti_dijual'])) {
                include("edit_properti_dijual.php");
            }
            if(isset($_GET['hapus_properti'])) {
                include("hapus_properti.php");
            }
            if(isset($_GET['lihat_pelanggan'])) {
                include("lihat_pelanggan.php");
            }
            if(isset($_GET['hapus_pelanggan'])) {
                include("hapus_pelanggan.php");
            }

            if(isset($_GET['hapus_properti'])) {
                include("hapus_properti.php");
            }
            if(isset($_GET['lihat_order'])) {
                include("lihat_order.php");
            }
            if(isset($_GET['detailorder'])) {
                include("detail_order.php");
            }
            ?>
        </div>
    </div>
</div>

<?php
include 'parsial/footer.php';
        }
?>