
<?php include 'parsial/header.php';

?>
<body>
    <div class="container-xxl bg-white p-0">

        <?php include 'parsial/navbar.php' ?>
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0 mt-4">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h2 class="animated fadeIn mb-4"><span class="text-primary"><?php echo $namaProperti; ?></h2>
                    <h4 class="animated fadeIn mb-3">Rp.<?php echo $hargaProperti; ?></h4>
                    <p><i class="fas fa-bed"></i> <?php echo $jumlahKamarTidur; ?> Kamar Tidur </p>
                    <p><i class="fas fa-bath"></i> <?php echo $jumlahkamarMandi; ?> Kamar Mandi </p>
                    <p><i class="fas fa-warehouse"></i> <?php echo $jumlahGarasi; ?> Garasi</p>
                    <p><i class="fas fa-ruler-combined"></i> <?php echo $ukuranProperti;?> M<sup>2</sup></p>
                    <p>Tahun Dibangun : <?php echo $tahunDibangun;?></p>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel ">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="admin_area/gambar_properti/<?php echo $gambarProperti1; ?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="admin_area/gambar_properti/<?php echo $gambarProperti2; ?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="admin_area/gambar_properti/<?php echo $gambarProperti3; ?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="admin_area/gambar_properti/<?php echo $gambarProperti4; ?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="admin_area/gambar_properti/<?php echo $gambarProperti5; ?>" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="admin_area/gambar_properti/<?php echo $gambarProperti6; ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="admin_area/gambar_properti/<?php echo $gambarProperti1; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4"><?php echo $namaProperti; ?></h1>
                        <p class="mb-4">
                            <?php echo $deksripsiProperti; ?>
                        </p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="checkout.php?ID=<?php echo $Number;?>">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Lihat Properti lainnya</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php
                                $getProperti = "SELECT * From tbl_properti order by rand() LIMIT 0,3";
                                $runProperti = mysqli_query($koneksi,$getProperti);
                                while($rowProperti = mysqli_fetch_array($runProperti)) {
                                    $ID = $rowProperti['ID'];
                                    $namaProperti = $rowProperti['Nama_properti'];
                                    $alamatProperti = $rowProperti['Alamat_properti'];
                                    $hargaProperti = $rowProperti['Harga_properti'];
                                    $status = $rowProperti['Status_properti'];
                                    $idTipe = $rowProperti['Tipe_properti'];
                                    $gambarPropertiUtama = $rowProperti['Gambar_properti1'];
                                    $ukuranProperti = $rowProperti['Ukuran_properti'];
                                    $jumlahKamarTidur = $rowProperti['Jumlah_kamar_tidur'];
                                    $jumlahKamarMandi = $rowProperti['Jumlah_kamar_mandi'];
                                    $getTipe = "SELECT * From tipe_properti";
                                    $runTipe = mysqli_query($koneksi,$getTipe);
                                    $rowTipe = mysqli_fetch_array($runTipe);
                                    $idTipe = $rowTipe['ID'];
                                    $namaTipe = $rowTipe['Nama_tipe'];
                                    $getJumlah = "SELECT *From tbl_properti WHERE Tipe_properti=$idTipe";
                                    echo "
                                    <div class='box col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                                    <div class='property-item rounded overflow-hidden'>
                                        <div class='position-relative overflow-hidden'>
                                            <a href=''><img class='img-fluid' src='admin_area/gambar_properti/$gambarPropertiUtama' alt=''></a>
                                            <div class='bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>Untuk $status</div>
                                            <div class='bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3'>
                                                $namaTipe
                                            </div>
                                        </div>
                                        <div class='p-4 pb-0'>
                                            <h5 class='text-primary mb-3'>Rp$hargaProperti</h5>
                                            <a class='d-block h5 mb-2' href=''>$namaProperti</a>
                                            <p><i class='fa fa-map-marker-alt text-primary me-2'></i>$alamatProperti</p>
                                        </div>
                                        <div class='d-flex border-top'>
                                            <small class='flex-fill text-center border-end py-2'><i class='fa fa-ruler-combined text-primary me-2'></i>$ukuranProperti M</small>
                                            <small class='flex-fill text-center border-end py-2'><i class='fa fa-bed text-primary me-2'></i>$jumlahKamarTidur Kamar Tidur</small>
                                            <small class='flex-fill text-center py-2'><i class='fa fa-bath text-primary me-2'></i>$jumlahKamarMandi Kamar Mandi</small>
                                        </div>
                                    </div>
                                </div>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->

<?php include 'parsial/footer.php'; ?>