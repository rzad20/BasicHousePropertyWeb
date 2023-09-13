<?php
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
if(isset($_GET['detailorder'])) {
    $idorder = $_GET['detailorder'];
    $getorder = "SELECT * FROM tbl_bayar where id_booking='$idorder'";
    $runorder = mysqli_query($koneksi,$getorder);
    $roworder = mysqli_fetch_array($runorder);
    $invoiceid = $roworder['invoice_id'];
    $tanggalbayar = $roworder['tanggal_bayar'];
    $idbank = $roworder['id_bank'];
    $norekening = $roworder['no_rekening'];
    $jumlahbayar = $roworder['jumlah_bayar'];
    $buktibayar = $roworder['bukti_bayar'];
}
?>
<div class="row"> <!--Awal Row-->

<div class="col-lg-12"> <!--Awal col-lg-12-->

    <ol class="breadcrumb">  <!--Awal Breadcrumb-->

        <li class="active"> <!--Awal Li.Active-->

            <i class="fa fa-dashboard">
                Dashboard / Detail & Verifikasi Order
            </i>

        </li> <!--Akhir Li.Active-->

    </ol>  <!--Akhir Breadcrumb-->

</div> <!--Akhir col-lg-12-->

</div> <!--Akhir Row-->


<div class="row"> <!--Awal Row-->

<div class="col-lg-12"> <!--Awal col-lg-12-->

    <div class="panel panel-default"> <!--Awal panel panel-default-->

        <div class="panel-heading"> <!--Awal panel-heading-->

            <h3 class="panel-title"> <!--Awal panel-title-->

                    <i class="fa fa fa-plus-square-o fa-fw"> </i> Verifikasi Orderan

            </h3> <!--Akhir panel-title-->

        </div> <!--Akhir panel-heading-->

        <div class="panel-body"> <!--Awal panel body-->

            <form method="post" class="form-horizontal" enctype="multipart/form-data"> <!--Awal form-horizontal-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Invoice ID </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->
                        <input type="text" name="properti_ID" class="form-control" value="<?php echo $invoiceid;?>" readonly>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->    

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Nama Pelanggan </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->
                        <?php
                            $getbooking = "SELECT * from tbl_pemesanan where no=$idorder";
                            $runbooking = mysqli_query($koneksi,$getbooking);
                            $rowbooking = mysqli_fetch_array($runbooking);
                            $customerid=$rowbooking['customer_id'];
                            $propertiid = $rowbooking['id_properti'];
                            $jenispembayaran = $rowbooking['jenis_pembayaran'];
                            $status = $rowbooking['status'];
            

                            $getcustomer = "SELECT * from tbl_customer where ID=$customerid";
                            $runcustomer = mysqli_query($koneksi,$getcustomer);
                            $rowbooking = mysqli_fetch_array($runcustomer);
                            $namapelanggan = $rowbooking['Nama_pelanggan'];
                        ?>
                        <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $namapelanggan;?>" readonly>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->    

                <div class="form-group">  <!--Awal form group-->

                    <label class="col-md-3 control-label"> Nama Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->
                        <?php
                        $getproperti = "SELECT * from tbl_properti where ID=$propertiid";
                        $runproperti = mysqli_query($koneksi,$getproperti);
                        $rowproperti = mysqli_fetch_array($runproperti);
                        $namaproperti = $rowproperti['Nama_properti'];
                        
            
                        ?>
                        <input type="text" name="nama_properti" placeholder="Masukkan Nama Properti" class="form-control" value="<?php echo $namaproperti; ?>"readonly>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Harga Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="harga_properti" class="form-control" value="<?php echo $jumlahbayar;?>" readonly>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Status </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="text" name="status" value="<?php echo $status; ?>" class="form-control" readonly>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form">
                    <h2>Bukti Pembayaran</h2>
                    <div class="grid">
                        <div class="form-element">
                            <label for="file-1" id="file-1-preview">
                                <img src="../buktibayar/<?php echo $buktibayar; ?>">

                            </label>
                        
                        </div>
</div>
                </div>

                <br>
                <br>
                <br>

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"></label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="submit" name="verifikasi" value="Verifikasi Pesanan" class="btn btn-primary form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

            </form> <!--Akhir form-horizontal-->

        </div>

    </div>  <!--Akhir panel panel-default-->

</div> <!--Akhir col-lg-12-->

</div> <!--Akhir Row-->
<script>
        function previewBeforeUpload(id) {
            document.querySelector("#"+id).addEventListener("change", function(e){
                if(e.target.files.length==0) {
                    return;
                }
                let file = e.target.files[0];
                let url = URL.createObjectURL(file);
                document.querySelector("#"+id+"-preview div").innerText = file.name;
                document.querySelector("#" +id+"-preview img").src = url;
            });
        }
            previewBeforeUpload("file-1");
    </script>

    <?php
        if(isset($_POST['verifikasi'])) {
            $updatepesanan = "UPDATE tbl_pemesanan SET
            status = 'Terverifikasi',
            tgl_verifikasi=now()";
            $runupdatepesanan = mysqli_query($koneksi,$updatepesanan);
            if($runupdatepesanan) {
                echo "
                <script>
                alert('Berhasil Verifikasi')
                </script>
                ";
                echo "
                <script>

                window.open('index.php?lihat_order','_self')

                </script>
                ";
            }
            
        }
}
    ?>