<?php
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
?>
<div class="row"> <!----Awal Row 1--->
    <div class="col-lg-12"> <!----Awal Col-Lg-12--->
        <ol class="breadcrumb">  <!----Awal Breadcrumb--->
            <li class="active"> <!----Awal Active--->
                <i class="fa fa-dashboard"></i> Dashboard / Properti Dijual
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
                                <th> ID </th>
                                <th> Tipe Properti  </th>
                                <th> Nama Properti  </th>
                                <th> Harga </th>
                                <th> Edit Properti </th>
                                <th> Hapus Properti </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            <?php
                                $getData = "SELECT * From tbl_properti";
                                $runData = mysqli_query($koneksi,$getData);
                                while($rowData = mysqli_fetch_array($runData)) {
                                    $ID = $rowData['ID'];
                                    $PropertiID = $rowData['Property_ID'];
                                    $IDTipe = $rowData['Tipe_properti'];
                                    $namaProperti = $rowData['Nama_properti'];
                                    $hargaProperti = $rowData['Harga_properti'];
                                
                            ?>
                            
                            <tr>
                                <td><?php echo $PropertiID; ?></td>
                                <td>
                                    <?php 
                                        $getTipe = "SELECT * From tipe_properti where ID='$IDTipe'";
                                        $runTipe = mysqli_query($koneksi,$getTipe);
                                        $rowTipe = mysqli_fetch_array($runTipe);
                                        $tipeProperti = $rowTipe['Nama_tipe'];
                                        echo $tipeProperti;
                                    ?>
                                </td>
                                <td><?php echo $namaProperti; ?></td>
                                <td><?php echo $hargaProperti; ?></td>
                                <td> 
                                     
                                     <a href="index.php?edit_properti_dijual=<?php echo $ID; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?hapus_properti=<?php echo $ID; ?>">
                                     
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