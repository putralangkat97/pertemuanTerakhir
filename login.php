<?php 

session_start();
include 'koneksi.php';

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Login Pelanggan </h2>
               
                <h5>( Login untuk melanjutkan pembayaran )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
                                            <input type="email" class="form-control" placeholder="Masukkan Email " name="email"required  />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Masukkan Password" name="password" required />
                                        </div>
                                   
                                  <button class="btn btn-primary" name="login">Login</button>
                                    <hr />
                                    Tidak terdaftar ? <a href="daftar.php" > klik disini </a> 
                                  </form>
                                  <?php 


                                  if (isset($_POST['login'])) {
                                    $email = $_POST['email'];
                                    $pass  = $_POST['password'];

                                    $sql = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$pass'");

                                    $cek = $sql->num_rows;

                                    if ($cek == 1) {
                                      $_SESSION['pelanggan'] = $sql->fetch_assoc();

                                      //arahkan ke halaman checkout
                                      echo "<script>alert('Login sukses');</script>";
                                      echo "<script>document.location.href='checkout.php';</script>";
                                    }
                                    else{
                                      echo "<script>alert('Login gagal');</script>";
                                      echo "<script>document.location.href='login.php';</script>";
                                    }
                                  }

                                   ?>
                            </div>
                        </div>
                    </div>
            </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="admin/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="admin/assets/js/custom.js"></script>
   
</body>
</html>
