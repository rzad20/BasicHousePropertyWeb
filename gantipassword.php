<h4>Ganti Password</h4>
<form method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Password Lama</label>
            <input type="text" id="form3Example3" name="pass_lama" class="form-control form-control-lg"
              placeholder="Masukkan Password Lama" required/>
          </div>

          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Password Baru</label>
            <input type="text" id="form3Example3" name="pass_baru" class="form-control form-control-lg"
              placeholder="Masukkan Password Baru" required/>
          </div>

          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example3">Konfirmasi Password Baru</label>
            <input type="text" id="form3Example3" name="konfirm_pass_baru" class="form-control form-control-lg"
              placeholder="Masukkan Password Baru" required/>
          </div>

          <div class="text-center text-lg-start mt-4 mb-5 pt-2">
            <button type="submit" name="updatepass" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Ubah Password</button>
          </div>

        </form>

<?php
if(isset($_POST['updatepass'])) {
    $username = $_SESSION['Username'];
    $passlama = $_POST['pass_lama'];
    $passbaru = $_POST['pass_baru'];
    $konfirpass = $_POST['konfirm_pass_baru'];
    $getpasslama = "SELECT * from tbl_customer where Password='$passlama'";
    $runpasslama = mysqli_query($koneksi,$getpasslama);
    $checkpasslama = mysqli_fetch_array($runpasslama);
    if($checkpasslama ==0) {
        echo "
            <script>
                alert('Maaf, Password Lama Anda Salah. Silahkan Coba Lagi')
            </script>
        ";
        exit();
    }
    if($passbaru!=$konfirpass) {
        echo "
            <script>
                alert('Maaf, Password Tidak Sama')
            </script>
        ";
        exit();
    }
    $updatepass = "UPDATE tbl_customer set Password='$passbaru' where Username='$username'";
    $runupdate = mysqli_query($koneksi,$updatepass);
    if($runupdate) {
        echo "
        <script>
            alert('password berhasil diganti')
        </script>
    ";

        echo "
        <script>
            window.open('akunsaya.php?order_saya','_self')
        </script>
    ";
    }
}

?>