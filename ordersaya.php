<?php
$username = $_SESSION['Username'];
$getidcustomer = "SELECT ID FROM tbl_customer where Username='$username'";
$runidcustomer = mysqli_query($koneksi,$getidcustomer);
$rowidcustomer = mysqli_fetch_array($runidcustomer);
$idcust = $rowidcustomer['ID'];

$getcustorder="SELECT * FROM tbl_pemesanan where customer_id='$idcust'";
$runcustorder = mysqli_query($koneksi,$getcustorder);
?>
<h4 class="text-primary">ORDER SAYA</h4>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">ID Booking</th>
            <th scope="col">Nama Properti</th>
            <th scope="col">Jenis Pembayaran</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Status</th>
            <th scope="col">Konfirmasi</th>
        </tr>
        <?php
        while($rowcustorder = mysqli_fetch_array($runcustorder)) {
        $nobooking = $rowcustorder['no'];
        $tanggal = $rowcustorder['tgl_booking'];
        $idbooking = $rowcustorder['booking_id'];
        $idproperti = $rowcustorder['id_properti'];
        $jenisbayar = $rowcustorder['jenis_pembayaran'];
        $totalbayar = $rowcustorder['total'];
        $status = $rowcustorder['status'];
        ?>
        <tr>
            <td><?php echo $tanggal; ?></td>
            <td><?php echo $idbooking; ?></td>
            <td>
                <?php
                $getnamaproperti = "SELECT Nama_properti FROM tbl_properti WHERE ID='$idproperti'";
                $runnamaproperti = mysqli_query($koneksi,$getnamaproperti);
                $rownamaproperti = mysqli_fetch_array($runnamaproperti);
                $namaproperti = $rownamaproperti['Nama_properti'];
                echo $namaproperti;
                ?>
            </td>
            <td>
                <?php echo $jenisbayar;?>
            </td>
            <td><strong>Rp<?php echo $totalbayar; ?></strong></td>
            <td><?php echo $status; ?></td>
            <td>
                <?php
                $checkbayar = "SELECT * FROM tbl_bayar where id_booking=$nobooking";
                $runcheck = mysqli_query($koneksi,$checkbayar);
                $check = mysqli_num_rows($runcheck);
                if($check==1) {
                    echo "<p> Sudah Konfirmasi </p>";
                }
                else {
                ?>
            <a href='konfirmasibayar.php?idbooking=<?php echo $nobooking;?>' class='btn btn-primary'>Konfirmasi</a>
            </td>
        </tr>
        <?php
                }
        }
        ?>
    </thead>
    <tbody>
    </tbody>
</table>