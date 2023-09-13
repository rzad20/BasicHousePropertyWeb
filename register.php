<?php
include 'parsial/header.php';
include 'parsial/navbar.php';
include 'parsial/functions.php';
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/property-2.jpg">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h4>Daftar Akun Baru</h4>
        <form action="register.php" method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input type="text" id="form3Example3" name="nama_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nomor KTP</label>
            <input type="text" id="form3Example3" name="nomor_ktp" class="form-control form-control-lg"
              placeholder="Masukkan Nama Lengkap" />
          </div>


          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Nomor Handphone</label>
            <input type="text" id="form3Example3" name="nomor_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Nomor Handphone" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Alamat Lengkap</label>
            <input type="text" id="form3Example3" name="alamat_pelanggan" class="form-control form-control-lg"
              placeholder="Masukkan Alamat Lengkap" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Pekerjaan</label>
            <input type="text" id="form3Example3" name="pekerjaan" class="form-control form-control-lg"
              placeholder="Masukkan Pekerjaan" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Email</label>
            <input type="email" id="form3Example3" name="email"  class="form-control form-control-lg"
              placeholder="Masukkan Email" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
              placeholder="Masukkan password" />
          </div>

          <div class="text-center text-lg-start mt-4 mb-5 pt-2">
            <button type="submit" name="register" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrasi</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>
<?php include 'parsial/footer.php'?>
<?php
if(isset($_POST['register'])) {
  $namaPelanggan = $_POST['nama_pelanggan'];
  $noKtp = $_POST['nomor_ktp'];
  $nomorPelanggan = $_POST['nomor_pelanggan'];
  $alamatPelanggan = $_POST['alamat_pelanggan'];
  $pekerjaan = $_POST['pekerjaan'];
  $username = $_POST['email'];
  $password = $_POST['password'];
  $custIP = getRealIpUser();

$tambahPelanggan = "INSERT into tbl_customer set
  Nama_pelanggan = '$namaPelanggan',
  No_KTP = '$noKtp',
  Nomor_pelanggan = '$nomorPelanggan',
  Alamat_pelanggan = '$alamatPelanggan',
  Pekerjaan = '$pekerjaan',
  Username = '$username',
  Password = '$password',
  ip_customer = '$custIP'
";
$runPelanggan = mysqli_query($db,$tambahPelanggan);
if($runPelanggan) {
    echo "
            <script>
                alert('Berhasil Mendaftar')
            </script>
        ";

        echo "
            <script>

                window.open('customer.php,'_self')

            </script>
        ";
    }
}
?>