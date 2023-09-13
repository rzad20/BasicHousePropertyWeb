<?php
    session_start();
    include('parsial/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Admin Area - TIRTA MENCIRIM RESIDENCE</title>
    <!--font-->
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Styleadmin.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container" > <!----Awal Container---->
        <form action="" class="form-login" method="post"> <!----Awal Form Login---->
            <h2 class="form-login-heading"> Login Admin</h2>
            <input type="text" class="form-control" placeholder= "Email Address" name="admin_email" required>
            
            <input type="password" class="form-control" placeholder="Password" name="admin_pass" required>
            <button type="submit"  class="btn btn-lg btn-primary btn-block" name="admin_login"> <!----Awal btn btn lg---->
                Login
            </button> <!----Akhir btn btn lg---->
        </form>
    </div> <!----Akhir Container---->
</body>
</html>

<?php
    if(isset($_POST['admin_login'])) {
        $admin_email = mysqli_real_escape_string($koneksi,$_POST['admin_email']);
        $admin_pass = mysqli_real_escape_string($koneksi,$_POST['admin_pass']);
        $get_admin = "SELECT *from tbl_admin WHERE Username='$admin_email' AND Password='$admin_pass'";
        $run_admin = mysqli_query($koneksi,$get_admin);
        $count = mysqli_num_rows($run_admin);

        if($count==1) {
            $_SESSION['admin_email']=$admin_email;
            echo "<script>alert('Berhasil Masuk. Selamat Datang')</script>";

            echo "<script>window.open('index.php?dashboard','_self')</script>";
        }

        else {
            echo "<script>alert('Email atau Password Salah')</script>";
        }
    }

?>