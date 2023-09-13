   <!-- Navbar Start -->
   <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <h2 class="m-0 text-primary">PT.KARYA CIPTA TIRTA MURNI</h2>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Properti</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.php" class="dropdown-item">Daftar Properti</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Kontak Kami</a>
                    </div>
                    <?php 
                    if(!isset($_SESSION['Username'])) {
                        echo "<a href='customer.php' class='btn btn-primary ms-2 px-3 d-none d-lg-flex'>Login/Register</a>";
                    }
                    else {
                        echo "<a href='akunsaya.php' class='btn btn-primary ms-2 px-3 d-none d-lg-flex'>".$_SESSION['Username']."</a>";
                        echo "<a href='logout.php' class='btn btn-primary ms-2 px-3 d-none d-lg-flex'>Logout</a>";
                    }
                    
                    ?>
                </div>
            </nav>=
        </div>
        <!-- Navbar End -->