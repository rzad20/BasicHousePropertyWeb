<?php
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
?>
<div class="row"> <!----Awal Row 1--->
    <div class="col-lg-12"> <!----Awal Col-Lg-12--->
        <ol class="breadcrumb">  <!----Awal Breadcrumb--->
            <li class="active"> <!----Awal Active--->
                <i class="fa fa-dashboard"></i> Dashboard / Lihat Order
            </li> <!----Akhir Active--->
        </ol>
    </div>  <!----Akhir Col-Lg-12--->
</div> <!----Akhir Row 1--->

<div class="row"> <!----Awal Row 2--->
    <div class="col-lg-12"> <!----Awal Col-Lg-12--->
        <div class="panel panel-default"> <!----Awal Panel Default--->
            <div class="panel-heading">  <!----Awal Panel Heading--->
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No </th>
                                <th> Booking ID </th>
                                <th> Nama Customer  </th>
                                <th> Tanggal Booking </th>
                                <th> Jenis Pembayaran </th>
                                <th> Status </th>
                                <th> Tanggal Verifikasi </th>
                                <th> Detail Orderan </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            <?php
                                $getData = "SELECT * From tbl_pemesanan";
                                $runData = mysqli_query($koneksi,$getData);
                                $i=0;
                                while($rowData = mysqli_fetch_array($runData)) {
                                    $no = $rowData['no'];
                                    $bookingID = $rowData['booking_id'];
                                    $customerID = $rowData['customer_id'];
                                    $tglBooking = $rowData['tgl_booking'];
                                    $jenisBayar = $rowData['jenis_pembayaran'];
                                    $status = $rowData['status'];
                                    $tglverif = $rowData['tgl_verifikasi'];
                                    
                                    $i++;
                                
                            ?>
                            
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $bookingID ?></td>
                                <td>
                                <?php 
                                $getnamacustomer = "SELECT Nama_pelanggan FROM tbl_customer where ID='$customerID'";
                                $runnamacustomer = mysqli_query($koneksi,$getnamacustomer);
                                $rownamacustomer = mysqli_fetch_array($runnamacustomer);
                                $namacust = $rownamacustomer['Nama_pelanggan'];
                                echo $namacust;
                                ?>
                                </td>
                                <td><?php echo $tglBooking; ?></td>
                                <td><?php echo $jenisBayar; ?></td>
                                <td><?php echo $status; ?></td>
                                <td><?php echo $tglverif;?>
                                <td> 
                                     
                                     <a href="index.php?detailorder=<?php echo $no; ?>">
                                     
                                        <i class="fa fa-eye"></i> Detail Order
                                    
                                     </a> 
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            </div> <!----Akhir Panel Heading--->
        </div> <!----Akhir Panel Default--->
    </div> <!----Akhir Col-Lg-12--->
</div> <!----Akhir Row 2--->

<?php
}
?>