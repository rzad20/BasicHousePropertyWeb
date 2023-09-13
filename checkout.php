<?php
include('parsial/header.php');
if(!isset($_SESSION['Username'])) {
  echo "<script>window.open('customer.php','_self')</script>";
}
else {
include('parsial/navbar.php');
include('parsial/functions.php');
    //ambil data customer dari Database
    $propertiID = $_GET['ID'];
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
<section class="vh-200">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-4 col-xl-4 ">
        <h4>Form Pemesanan Properti</h4>
       
        <form method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <h5>Data Customer</h5>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input type="text" id="form3Example3" name="nama_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" value="<?php echo $nama;?>" readonly/>
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nomor KTP</label>
            <input type="text" id="form3Example3" name="nomor_ktp" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" value="<?php echo $noktp;?>"readonly/>
          </div>


          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Nomor Handphone</label>
            <input type="text" id="form3Example3" name="nomor_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Nomor Handphone" value="<?php echo $nomor;?>" readonly />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Alamat Lengkap</label>
            <input type="text" id="form3Example3" name="alamat_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Alamat Lengkap" value="<?php echo $alamat;?>" readonly/>
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Pekerjaan</label>
            <input type="text" id="form3Example3" name="pekerjaan" class="form-control form-control-lg"
              placeholder="Masukkan Pekerjaan" value="<?php echo $pekerjaan;?>" readonly/>
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Email</label>
            <input type="email" id="form3Example3" name="email"  class="form-control form-control-lg"
              placeholder="Masukkan Email" value="<?php echo $username;?>" readonly/>
          </div>

        </form>
      </div>
      <div class="col-md-9 col-lg-4 col-xl-4">
        <h5>Data Properti</h5>
        <?php
          $getProperti = "SELECT * FROM tbl_properti WHERE ID='$propertiID'";
          $runProperti = mysqli_query($koneksi,$getProperti);
          $rowProperti = mysqli_fetch_array($runProperti);
          $namaproperti = $rowProperti['Nama_properti'];
          $hargaproperti = $rowProperti['Harga_properti'];
        ?>
        <form method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-3">
            <?php
            $getnum = "SELECT * FROM tbl_pemesanan";
            $runnum = mysqli_query($koneksi,$getnum);
            $i=1;
            $count = mysqli_num_rows($runnum);
            $unique = $count + $i;
            ?>
            <label class="form-label" for="form3Example3">Booking ID</label>
            <input type="text" id="form3Example3" name="booking_id" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" value="TMCBK0<?php echo $unique;?>" readonly/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nama Properti</label>
            <input type="text" id="form3Example3" name="nama_pelanggan" class="form-control form-control-lg"
              value="<?php echo $namaproperti;?>" readonly/>
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Jumlah Unit</label>
            <input type="number" id="form3Example3" name="jumlah_unit" class="form-control form-control-lg"
              placeholder="Masukkan Jumlah Unit" required/>
          </div>


          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Harga Per Properti</label>
            <input type="text" id="form3Example3" name="harga_satuan" class="form-control form-control-lg"
              value="<?php echo $hargaproperti;?>" readonly />
          </div>
          <h5>Pilih Pembayaran</h5>
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Jenis Pembayaran</label>
            <input type="text" id="form3Example3" name="jenis_pembayaran" class="form-control form-control-lg"
              placeholder="Masukkan Nomor Handphone" value="Lunas" readonly />
            <span>Untuk Cicilan, Dapat menghubungi <a href="contact.php">Kontak Kami</a></span>
          </div>
          <div class="text-center text-lg-start mt-4 mb-5 pt-2">
            <button type="submit" name="purchase" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Proses Pesanan</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
}
include('parsial/footer.php');
if(isset($_POST['purchase'])) {
  $bookingid = $_POST['booking_id'];
  $ip_add = getRealIpUser();
  $jenis_pembayaran = $_POST['jenis_pembayaran'];
  $jumlahunit = $_POST['jumlah_unit'];
  $insertorder = "INSERT INTO tbl_pemesanan SET
  booking_id='$bookingid',
  customer_id=$id,
  tgl_booking = now(),
  status = 'Belum Lunas',
  jenis_pembayaran='$jenis_pembayaran',
  ipadd='$ip_add',
  id_properti = $propertiID,
  jumlah=$jumlahunit,
  total = $jumlahunit*$hargaproperti
  ";
  $runinsertorder = mysqli_query($koneksi,$insertorder);
  if($runinsertorder) {
    echo "<script> alert('Orderan anda telah diproses, Terima kasih')</script>";
  }
}
?>