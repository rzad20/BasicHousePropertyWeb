
<?php include 'parsial/header.php'; ?>
<body>
    <div class="container-xxl bg-white p-0">

        <?php include 'parsial/navbar.php' ?>
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Dapatkan <span class="text-primary">Properti</span> Terbaik Untukmu</h1>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">List Properti</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel ">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Tipe Properti</h1>
                </div>
                <div class="row g-4">
                    <?php
                     $getTipe = "SELECT * From tipe_properti";
                     $runTipe = mysqli_query($koneksi,$getTipe);
                     while ($rowTipe = mysqli_fetch_array($runTipe)) {
                         $idTipe = $rowTipe['ID'];
                         $namaTipe = $rowTipe['Nama_tipe'];
                         $getJumlah = "SELECT *From tbl_properti WHERE Tipe_properti=$idTipe";
                         $runJumlah = mysqli_query($koneksi,$getJumlah);
                         $count = mysqli_num_rows($runJumlah);
                         echo "
                         <div class='col-lg-3 col-sm-6 wow fadeInUp' data-wow-delay='0.1s'>
                            <a class='cat-item d-block bg-light text-center rounded p-3' href=''>
                            <div class='rounded p-4'>
                                <h6>$namaTipe</h6>
                                <span>$count Properti</span>
                            </div>
                        </a>
                    </div>
                         ";
                     }
                    ?>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Tempat terbaik untuk dapatkan properti terbaik</h1>
                        <p class="mb-4">Tirta Mencirim Residence terletak di Jl. Glugur Rimbun - Diski, Suka Raya, Kec. Pancur Batu, Kabupaten Deli Serdang, Sumatera Utara 20351 </p>
                        <p class="mb-4">Tirta Mencirim Residence sendiri memiliki keunggulan keunggulan
                        <p><i class="fa fa-check text-primary me-3"></i>Properti Kualitas Terbaik</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lokasi Strategis</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Fasilitas Terlengkap</p>
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
                            <h1 class="mb-3">List Property</h1>
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
                                $getProperti = "SELECT * From tbl_properti order by rand() LIMIT 0,6";
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
                                            <a href='detail_properti.php?ID=$ID'><img class='img-fluid' src='admin_area/gambar_properti/$gambarPropertiUtama' alt=''></a>
                                            <div class='bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>Untuk $status</div>
                                            <div class='bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3'>
                                                $namaTipe
                                            </div>
                                        </div>
                                        <div class='p-4 pb-0'>
                                            <h5 class='text-primary mb-3'>Rp$hargaProperti</h5>
                                            <a class='d-block h5 mb-2' href='detail_properti.php?ID=$ID'>$namaProperti</a>
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