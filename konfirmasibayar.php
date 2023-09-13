<?php
include("parsial/header.php");
include("parsial/functions.php");
include("parsial/navbar.php");
if(isset($_GET['idbooking'])) {
    $bookingid = $_GET['idbooking'];
    ?>
    <section class="vh-200">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-4 col-xl-4 ">
        <h4>Konfirmasi Pemesanan</h4>
        <form method="post" enctype="multipart/form-data">
          <!-- Email input -->
          <?php
            $getnum = "SELECT * FROM tbl_pemesanan WHERE no=$bookingid";
            $runnum = mysqli_query($koneksi,$getnum);
            $rownum = mysqli_fetch_array($runnum);
            $booking = $rownum['booking_id'];
            $getinvum = "SELECT * FROM tbl_bayar";
            $runinvnum = mysqli_query($koneksi,$getinvum);
            $count = mysqli_num_rows($runinvnum);
            $i = 1;
            $invid = $count+$i;

            ?>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Invoice ID</label>
            <input type="text" id="form3Example3" name="invoice_id" class="form-control form-control-lg"
              value="INVTRT<?php echo $invid;?>" readonly/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Booking ID</label>
            <input type="text" id="form3Example3" name="booking_id" class="form-control form-control-lg" value="<?php echo $booking;?>" readonly/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Metode Pembayaran</label>
              <select name="metode_pembayaran" id="metode_pembayaran" class="form-control form-control-lg">
                  <?php
                      $selectMethod = "SELECT * from daftar_bank";
                      $runMethod = mysqli_query($koneksi,$selectMethod);
                      while($rowMethod = mysqli_fetch_array($runMethod)) {
                        $kode = $rowMethod['id'];
                        $metode = $rowMethod['nama_bank'];
                        echo "
                        <option value=$kode>$metode</option>
                        ";
                      };
                  ?>
              </select>
            </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Nomor Rekening</label>
            <input type="number" id="form3Example3" name="nomor_rekening" class="form-control form-control-lg"
              placeholder="Masukkan Nomor Rekening" required/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Jumlah Bayar</label>
            <input type="number" id="form3Example3" name="jumlah_bayar" class="form-control form-control-lg"
              placeholder="Masukkan Total Bayar" required/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">Upload Bukti Pembayaran</label>
            <input type="file" name="bukti_bayar" required>
          </div>
            <div class="text-center text-lg-start mt-4 mb-5 pt-2">
            <button type="submit" name="konfirmasi" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Konfirmasi Pembayaran</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
    <?php 
    if(isset($_POST['konfirmasi'])) {
        $invoiceid = $_POST['invoice_id'];
        $metodebayar = $_POST['metode_pembayaran'];
        $norek = $_POST['nomor_rekening'];
        $jumlahbayar = $_POST['jumlah_bayar'];
        $buktibayar = $_FILES['bukti_bayar']['name'];
        $tmp = $_FILES['bukti_bayar']['tmp_name'];
        move_uploaded_file($tmp,"buktibayar/$buktibayar");
        $tambahbayar = "INSERT INTO tbl_bayar SET
        invoice_id='$invoiceid',
        id_booking = $bookingid,
        tanggal_bayar = now(),
        id_bank = $metodebayar,
        no_rekening = $norek,
        jumlah_bayar = $jumlahbayar,
        bukti_bayar = '$buktibayar'
        ";
        $runinsert = mysqli_query($koneksi,$tambahbayar);
        if($runinsert) {
            $updatepesanan = "UPDATE tbl_pemesanan set
             status = 'Proses Verifikasi'
             where no=$bookingid
             ";
            $runupdate = mysqli_query($koneksi,$updatepesanan);
            echo "
            <script>
                alert('Berhasil Konfirmasi Pembayaran')
            </script>
        ";
        echo "
        <script>
            window.open('akunsaya.php?order_saya','_self')
        </script>
    ";

        }
    }
}
include("parsial/footer.php");
?>