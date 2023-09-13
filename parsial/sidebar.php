<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="akunsaya.php?order_saya" class="nav-link <?php if(isset($_GET['order_saya'])) {echo "active";}?>" aria-current="page">
            ORDER SAYA
            </a>
        </li>
        <li>
            <a href="akunsaya.php?edit_akun" class="nav-link <?php if(isset($_GET['edit_akun'])) {echo "active";}?>">
            EDIT AKUN
            </a>
        </li>
        <li>
            <a href="akunsaya.php?ganti_password" class="nav-link <?php if(isset($_GET['ganti_password'])) {echo "active";}?> ">
            GANTI PASSWORD
            </a>
        </li>
        <li>
            <a href="akunsaya.php?hapus_akun" class="nav-link <?php if(isset($_GET['hapus_akun'])) {echo "active";}?> ">
            HAPUS AKUN
            </a>
        </li>
        </ul>
        <hr>
        <li>
            <a href="logout.php" class="nav-link">
            LOGOUT
            </a>
        </li>
        </ul>
    </div>