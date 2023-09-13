<?php
    //ambil data customer dari Database
    $custSession = $_SESSION['Username'];
    $infoCust = "SELECT * From tbl_customer where Username='$custSession'";
    $runQuery = mysqli_query($koneksi,$infoCust);
    $row = mysqli_fetch_array($runQuery);
    $id = $row['ID'];
    $nama = $row['Nama_pelanggan'];
    $noktp = $row['No_KTP'];
    $nomor = $row['Nomor_pelanggan'];
    $alamat = $row['Alamat_pelanggan'];
    $pekerjaan = $row['Pekerjaan'];
    $username = $row['Username'];
    $password = $row['Password'];
?>
 <h4>Edit Akun</h4>
        <form method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input type="text" id="form3Example3" name="nama_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" value="<?php echo $nama;?>"/>
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nomor KTP</label>
            <input type="text" id="form3Example3" name="nomor_ktp" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" value="<?php echo $noktp;?>"/>
          </div>


          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Nomor Handphone</label>
            <input type="text" id="form3Example3" name="nomor_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Nomor Handphone" value="<?php echo $nomor;?>" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Alamat Lengkap</label>
            <input type="text" id="form3Example3" name="alamat_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Alamat Lengkap" value="<?php echo $alamat;?>" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Pekerjaan</label>
            <input type="text" id="form3Example3" name="pekerjaan" class="form-control form-control-lg"
              placeholder="Masukkan Pekerjaan" value="<?php echo $pekerjaan;?>"/>
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Email</label>
            <input type="email" id="form3Example3" name="email"  class="form-control form-control-lg"
              placeholder="Masukkan Email" value="<?php echo $username;?>" />
          </div>

          <div class="text-center text-lg-start mt-4 mb-5 pt-2">
            <button type="submit" name="update" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Edit Akun</button>
          </div>

        </form>
<?php
    if(isset($_POST['update'])) {
        $update_id=$id;
        $namaPelanggan = $_POST['nama_pelanggan'];
        $noKtp = $_POST['nomor_ktp'];
        $nomorPelanggan = $_POST['nomor_pelanggan'];
        $alamatPelanggan = $_POST['alamat_pelanggan'];
        $pekerjaan = $_POST['pekerjaan'];
        $username = $_POST['email'];
        $updateakun = "UPDATE tbl_customer set
            Nama_pelanggan = '$namaPelanggan',
            Nomor_pelanggan = '$nomorPelanggan',
            Alamat_pelanggan = '$alamatPelanggan',
            Pekerjaan = '$pekerjaan',
            Username = '$username'
        where ID='$update_id'
        ";
        $runUpdate = mysqli_query($koneksi,$updateakun);
        if($runUpdate) {
            echo "<script>alert(Akun berhasil diedit, silahkan login ulang')</script>";
            echo "<script>window.open('logout.php','_self')</script>";
        }
    }
?>