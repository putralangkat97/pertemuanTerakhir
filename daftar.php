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
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Registrasi Pelanggan</h2>
               
                <h5>( Register untuk mengakses )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Pelanggan Baru ? Silahkan Daftar </strong>  
                            </div>
                            <div class="panel-body">
                                <form method="POST">
                            <br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap Anda" required name="nama" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Nomor Telepon" required name="telepon" />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" class="form-control" placeholder="Email Anda" required name="email" />
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Masukkan Password" required name="password" />
                                        </div>
                                     
                                     <button class="btn btn-success" name="daftar">Register</button>
                                    <hr />
                                    Sudah daftar ?<a href="login.php" >Login disini</a>
                                    </form>
                                    <?php 

                                    if (isset($_POST['daftar'])) {
                                       
                                    $nama           = $_POST['nama'];
                                    $email          = $_POST['email'];
                                    $telepon        = $_POST['telepon'];
                                    $pass           = $_POST['password'];

                                    $sql = $koneksi->query("INSERT INTO pelanggan (email_pelanggan, password_pelanggan, nama_pelanggan, nomor_telepon) VALUES('$email', '$pass','$nama', '$telepon')");

                                    if ($sql) {
                                        echo "<script>
                                        alert('Anda berhasil mendaftar');
                                        </script>";
                                        echo "<script>
                                        document.location.href='login.php';
                                        </script>";
                                    }else{
                                        echo "<script>
                                        alert('Anda gagal mendaftar');
                                        </script>";
                                        echo "<script>
                                        document.location.href='daftar.php';
                                        </script>";
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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
