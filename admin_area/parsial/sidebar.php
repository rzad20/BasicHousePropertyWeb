<nav class="navbar navbar-inverse navbar-fixed-top color"> <!--Awal Navbar-->
    <div class="navbar-header"> <!--Awal Header Navbar---->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <!--Awal Navbar Toggle-->
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>


        </button> <!--Akhir Navbar Toggle-->
        <a href="index.php?dashboard" class="navbar-brand">PT.KARYA CIPTA TIRTA MURNI</a>
    </div> <!--Akhir Header Navbar---->

    <ul class="nav navbar-right top-nav"> <!--awal nav navbar-right top-nav-->
        <li class="dropdown"> <!--awal dropdown-->
            <a href="" class="dropdown-toggle" data-toggle="dropdown"> <!--awal dropdown toggle-->
                <i class="fa fa-user">Admin<b class="caret"></b></i>
            </a> <!--akhir dropdown toggle-->
            <ul class="dropdown-menu"> <!--Awal dropdown menu-->
                <li> <!--Awal Li-->
                    <a href="index.php?properti_dijual"> <!--Awal a href-->
                        <i class="fa fa-fw fa-building"></i> Properti
                        <span class="badge"></span>
                    </a> <!--Akhir a href-->
                </li> <!--Akhir Li-->
                <li class="divider"></li>

                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->

            </ul> <!--Akhir dropdown menu-->
        </li> <!--akhir dropdown-->
    </ul> <!--akhir nav navbar-right top-nav-->

      
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#properti"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-building"></i> Properti Dijual
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="properti" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?properti_dijual"> <i class="fa fa-fw fa-eye" aria-hidden="true"></i>
                        Data Properti Dijual </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?tambah_dijual"> 
                        <i class="fa fa-fw fa-plus" aria-hidden="true"></i>    
                        Tambah Properti Dijual </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#pelanggan"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Daftar Pelanggan
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="pelanggan" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?lihat_pelanggan"> Lihat Daftar Pelanggan</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#pemesanan"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Pemesanan Properti
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="pemesanan" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?lihat_order"> Daftar Pemesanan Properti </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
</nav> <!--Akhir Navbar-->