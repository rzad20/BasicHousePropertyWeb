<?php
 if(!isset($_SESSION['admin_email'])){
        
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
    if(isset($_GET['edit_properti_dijual'])) {
        $editId = $_GET['edit_properti_dijual'];
        $getData = "SELECT * From tbl_properti where ID='$editId'";
        $runData = mysqli_query($koneksi,$getData);
        $rowData = mysqli_fetch_array($runData);
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
    $getTipe = "SELECT * From tipe_properti where ID='$IDTipe'";
    $runTipe = mysqli_query($koneksi,$getTipe);
    $rowTipe = mysqli_fetch_array($runTipe);
    $tipeProperti = $rowTipe['Nama_tipe'];
?>

<div class="row"> <!--Awal Row-->

<div class="col-lg-12"> <!--Awal col-lg-12-->

    <ol class="breadcrumb">  <!--Awal Breadcrumb-->

        <li class="active"> <!--Awal Li.Active-->

            <i class="fa fa-dashboard">
                Dashboard / Edit Properti Dijual
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

                    <i class="fa fa fa-plus-square-o fa-fw"> </i> Edit Properti Dijual

            </h3> <!--Akhir panel-title-->

        </div> <!--Akhir panel-heading-->

        <div class="panel-body"> <!--Awal panel body-->

            <form method="post" class="form-horizontal" enctype="multipart/form-data"> <!--Awal form-horizontal-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Properti ID </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->
                        <input type="text" name="properti_ID" class="form-control" value="<?php echo $propertiID; ?>" readonly>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->    

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Tipe Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <select name="tipe_properti" class="form-control">
                            <option value="<?php echo $IDTipe;?>"> <?php echo $tipeProperti;?></option>
                            <?php
                                $getData = "SELECT * From tipe_properti where ID<>$IDTipe";
                                $runData = mysqli_query($koneksi,$getData);
                                while ($rowData = mysqli_fetch_array($runData)) {
                                    $idTipe = $rowData['ID'];
                                    $namaTipe = $rowData['Nama_tipe'];
                                    echo "
                                        <option value='$idTipe'>$namaTipe</option>
                                    ";
                                }
                            ?>
                        </select>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label class="col-md-3 control-label"> Nama Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="text" name="nama_properti" value="<?php echo $namaProperti; ?>" placeholder="Masukkan Nama Properti" class="form-control" required>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Alamat Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <textarea name="alamat_properti" cols="0" rows="8" class="form-control">
                        <?php echo $alamatProperti; ?>
                        </textarea>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Harga Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="harga_properti" value="<?php echo $hargaProperti; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Tahun Dibangun </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="tahun_dibangun" value="<?php echo $tahunDibangun; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Ukuran Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="ukuran_properti" value="<?php echo $ukuranProperti; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->


                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Jumlah kamar tidur </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="jumlah_kamar_tidur" value="<?php echo $jumlahKamarTidur; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Jumlah Kamar Mandi </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="jumlah_kamar_mandi"  value="<?php echo $jumlahkamarMandi; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Jumlah Garasi </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="jumlah_garasi" value="<?php echo $jumlahGarasi; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Ukuran Garasi </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <input type="number" name="ukuran_garasi" value="<?php echo $ukuranGarasi; ?>" class="form-control">

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                    <label  class="col-md-3 control-label"> Deskripsi Properti </label>
                    <div class="col-md-6"> <!--Awal Col-Md-6-->

                        <textarea name="deskripsi_properti" cols="20" rows="8" class="form-control">
                            <?php echo $deksripsiProperti; ?>
                        </textarea>

                    </div> <!--Akhir Col-Md-6-->

                </div> <!--Akhir form group-->

                <div class="form-group">  <!--Awal form group-->

                <label  class="col-md-3 control-label"> Status Properti </label>
                <div class="col-md-6"> <!--Awal Col-Md-6-->

                    <input type="text" name="status_properti" class="form-control" value="<?php echo $statusProperti; ?>" readonly>

                </div> <!--Akhir Col-Md-6-->

            </div> <!--Akhir form group--> 
                
                <div class="form">
                    <h2>Pilih Gambar Properti</h2>
                    <div class="grid">
                        <div class="form-element">
                            <input type="file" name="properti_img1" id="file-1" accept="image/*" value="<?php echo $gambarProperti1; ?>">
                            <label for="file-1" id="file-1-preview">
                                <img src="gambar_properti/<?php echo $gambarProperti1; ?>">
                                <div>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                            </label>
                        
                        </div>
                        <div class="form-element">
                            <input type="file" name="properti_img2" id="file-2" accept="image/*" value="<?php echo $gambarProperti2; ?>">
                            <label for="file-2" id="file-2-preview">
                                <img src="gambar_properti/<?php echo $gambarProperti2; ?>">
                                <div>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                            </label>
                        
                        </div>
                        <div class="form-element">
                            <input type="file" name="properti_img3"id="file-3" accept="image/*" value="<?php echo $gambarProperti3; ?>">
                            <label for="file-3" id="file-3-preview">
                                <img src="gambar_properti/<?php echo $gambarProperti3; ?>">
                                <div>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                            </label>
                        
                        </div>
                    </div>
                    <div class="grid">
                        <div class="form-element">
                            <input type="file" name="properti_img4" id="file-4" accept="image/*" value="<?php echo $gambarProperti4; ?>">
                            <label for="file-4" id="file-4-preview">
                                <img src="gambar_properti/<?php echo $gambarProperti4; ?>">
                                <div>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                            </label>
                        
                        </div>
                        <div class="form-element">
                            <input type="file" name="properti_img5" id="file-5" accept="image/*" value="<?php echo $gambarProperti5; ?>">
                            <label for="file-5" id="file-5-preview">
                                <img src="gambar_properti/<?php echo $gambarProperti5; ?>">
                                <div>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
                            </label>
                        
                        </div>
                        <div class="form-element">
                            <input type="file" name="properti_img6"id="file-6" accept="image/*" value="<?php echo $gambarProperti6; ?>">
                            <label for="file-6" id="file-6-preview">
                                <img src="gambar_properti/<?php echo $gambarProperti6; ?>">
                                <div>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>
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

                        <input type="submit" name="update" value="Edit Properti Dijual" class="btn btn-primary form-control">

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
            previewBeforeUpload("file-2");
            previewBeforeUpload("file-3");
            previewBeforeUpload("file-4");
            previewBeforeUpload("file-5");
            previewBeforeUpload("file-6");
    </script>

    <?php
        if(isset($_POST['update'])) {
            $tipeProperti = $_POST['tipe_properti'];
            $namaProperti = $_POST['nama_properti'];
            $alamatProperti = $_POST['alamat_properti'];
            $hargaProperti = $_POST['harga_properti'];
            $tahunDibangun = $_POST['tahun_dibangun'];
            $ukuranProperti = $_POST['ukuran_properti'];
            $jumlahkamarTidur = $_POST['jumlah_kamar_tidur'];
            $jumlahkamarMandi = $_POST['jumlah_kamar_mandi'];
            $jumlahGarasi = $_POST['jumlah_garasi'];
            $ukuranGarasi = $_POST['ukuran_garasi'];
            $deksripsiProperti = $_POST['deskripsi_properti'];
            $gambarProperti1 = $_FILES['properti_img1']['name'];
            $gambarProperti2 = $_FILES['properti_img2']['name'];
            $gambarProperti3 = $_FILES['properti_img3']['name'];
            $gambarProperti4 = $_FILES['properti_img4']['name'];
            $gambarProperti5 = $_FILES['properti_img5']['name'];
            $gambarProperti6 = $_FILES['properti_img6']['name'];
            
            $tmp1 = $_FILES['properti_img1']['tmp_name'];
            $tmp2 = $_FILES['properti_img2']['tmp_name'];
            $tmp3 = $_FILES['properti_img3']['tmp_name'];
            $tmp4 = $_FILES['properti_img4']['tmp_name'];
            $tmp5 = $_FILES['properti_img5']['tmp_name'];
            $tmp6 = $_FILES['properti_img6']['tmp_name'];
            move_uploaded_file($tmp1,"gambar_properti/$gambarProperti1");
            move_uploaded_file($tmp2,"gambar_properti/$gambarProperti2");
            move_uploaded_file($tmp3,"gambar_properti/$gambarProperti3");
            move_uploaded_file($tmp4,"gambar_properti/$gambarProperti4");
            move_uploaded_file($tmp5,"gambar_properti/$gambarProperti5");
            move_uploaded_file($tmp6,"gambar_properti/$gambarProperti6");

            $tambahData = "UPDATE tbl_properti SET
            Tipe_properti = '$tipeProperti',
            Nama_properti = '$namaProperti',
            Alamat_properti = '$alamatProperti',
            Harga_properti = '$hargaProperti',
            Tahun_dibangun = $tahunDibangun,
            Ukuran_properti = $ukuranProperti,
            Jumlah_kamar_tidur = $jumlahkamarTidur,
            Jumlah_kamar_mandi = $jumlahkamarMandi,
            Jumlah_Garasi = $jumlahGarasi,
            Ukuran_garasi = $ukuranGarasi,
            Gambar_properti1 = '$gambarProperti1',
            Gambar_properti2 = '$gambarProperti2',
            Gambar_properti3 = '$gambarProperti3',
            Gambar_properti4 = '$gambarProperti4',
            Gambar_properti5 = '$gambarProperti5',
            Gambar_properti6 = '$gambarProperti6',
            Deksripsi_properti = '$deksripsiProperti'
            WHERE ID='$editId'
            ";
            $result = mysqli_query($koneksi,$tambahData);
            if($result) {
                echo "
                <script>
                    alert('Berhasil Edit Properti')
                </script>
            ";
    
            echo "
                <script>
    
                    window.open('index.php?properti_dijual','_self')
    
                </script>
            ";
            }
        }
    }
    ?>