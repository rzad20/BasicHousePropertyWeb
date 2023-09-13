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
        <form method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3"  name="customer_email" class="form-control form-control-lg"
              placeholder="Masukkan Alamat Email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="customer_password" class="form-control form-control-lg"
              placeholder="Masukkan Password" />
            <label class="form-label" for="form3Example4" >Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Belum Terdaftar? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<?php include 'parsial/footer.php';

if(isset($_POST['login'])) {
  $custEmail = $_POST['customer_email'];
  $custPassword = $_POST['customer_password'];
  $pilihCustomer = "SELECT * FROM tbl_customer where Username='$custEmail' AND Password='$custPassword'";
  $runCustomer = mysqli_query($db,$pilihCustomer);
  $getIP = getRealIpUser();
  $checkCustomer = mysqli_num_rows($runCustomer);
  if($checkCustomer==0) {
    echo"<script>alert('Username atau Password salah')</script>";
    exit();
  }
  if($checkCustomer==1) {
    $_SESSION['Username']=$custEmail;
    echo "<script>alert('Login berhasil')</script>";
    echo "<script>window.open('akunsaya.php','_self')</script>";
  }
}
?>