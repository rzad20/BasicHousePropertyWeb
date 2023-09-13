<?php
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
    ?>
<div class="row"> <!----Awal Row 1--->
    <div class="col-lg-12"> <!----Awal Col-Lg-12--->
        <ol class="breadcrumb">  <!----Awal Breadcrumb--->
            <li class="active"> <!----Awal Active--->
                <i class="fa fa-dashboard"></i> Dashboard / Lihat Data Pelanggan
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
                                <th> Nama Customer </th>
                                <th> Nomr Customer  </th>
                                <th> Alamat Customer </th>
                                <th> Pekerjaan </th>
                                <th> Email </th>
                                <th> Hapus Pelanggan </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            <?php
                                $getData = "SELECT * From tbl_customer";
                                $runData = mysqli_query($koneksi,$getData);
                                $i=0;
                                while($rowData = mysqli_fetch_array($runData)) {
                                    $ID = $rowData['ID'];
                                    $namaCustomer =  $rowData['Nama_pelanggan'];
                                    $nomorPelanggan = $rowData['Nomor_pelanggan'];
                                    $alamatPelanggan = $rowData['Alamat_pelanggan'];
                                    $pekerjaan = $rowData['Pekerjaan'];
                                    $username = $rowData['Username'];
                                    $i++;
                                
                            ?>
                            
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $namaCustomer ?></td>
                                <td><?php echo $nomorPelanggan ?></td>
                                <td><?php echo $alamatPelanggan ?></td>
                                <td><?php echo $pekerjaan; ?></td>
                                <td><?php echo $username; ?></td>
                                <td> 
                                     
                                     <a href="index.php?hapus_pelanggan=<?php echo $ID; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Hapus
                                    
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