<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        $getproperti = "SELECT * FROM tbl_properti";
        $runproperti = mysqli_query($koneksi,$getproperti);
        $countproperti = mysqli_num_rows($runproperti);
        $getpelanggan = "SELECT * FROM tbl_pemesanan";
        $runpelanggan = mysqli_query($koneksi,$getpelanggan);
        $countpelanggan = mysqli_num_rows($runpelanggan);
        $getpesanan = "SELECT * FROM tbl_pemesanan";
        $runpesanan = mysqli_query($koneksi,$getpesanan);
        $countpesanan = mysqli_num_rows($runpesanan);
        $getbayar = "SELECT * FROM tbl_bayar";
        $runbayar = mysqli_query($koneksi,$getbayar);
        $countbayar = mysqli_num_rows($runbayar);

?> 

<div class="row"><!-- row no: 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
        
    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $countproperti; ?>  </div>
                           
                        <div> Properti </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?properti_dijual"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-green"><!-- panel panel-green begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $countpelanggan; ?>  </div>
                           
                        <div> Pelanggan </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?lihat_pelanggan"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-green finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-orange"><!-- panel panel-yellow begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $countpesanan; ?>  </div>
                           
                        <div> Pesanan Properti </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?lihat_order"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-yellow finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary"><!-- panel panel-red begin -->
            
            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->
                       
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        
                    </div><!-- col-xs-3 finish -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> <?php echo $countbayar; ?> </div>
                           
                        <div> Pembayaran  </div>
                        
                    </div><!-- col-xs-9 text-right finish -->
                    
                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->
            
            <a href="index.php?lihat_bayar"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->
                   
                    <span class="pull-left"><!-- pull-left begin -->
                        View Details 
                    </span><!-- pull-left finish -->
                    
                    <span class="pull-right"><!-- pull-right begin --> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span><!-- pull-right finish --> 
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->
            
        </div><!-- panel panel-red finish -->
    </div><!-- col-lg-3 col-md-6 finish -->
    
</div><!-- row no: 2 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-8"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-money fa-fw"></i> New Orders
                    
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
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
                                $getData = "SELECT * From tbl_pemesanan LIMIT 0,5";
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
                
                <div class="text-right"><!-- text-right begin -->
                    
                    <a href="index.php?lihat_order"><!-- a href begin -->
                        
                        View All Orders <i class="fa fa-arrow-circle-right"></i>
                        
                    </a><!-- a href finish -->
                    
                </div><!-- text-right finish -->
                
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-primary finish -->
</div><!-- row no: 3 finish -->
<?php } ?>