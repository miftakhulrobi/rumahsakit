<?php
require_once "../_config/config.php";

if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url()."';</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Rumah sakit</title>

    <link href="<?=base_url('/_asset/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_asset/img/r.jpg')?>">


</head>

<body background="../_asset/img/rbh.jpg">

    <div id="wrapper">

    <div class="container">
        <div align="center" style="margin-top:220px;">

        <h3>Halaman <b>Login</b></h3>
        <br>
        

        <?php
        if(isset($_POST['login'])) {
            $user = trim(mysqli_real_escape_string($con, $_POST['user']));
            $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
    
            $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));

            if(mysqli_num_rows($sql_login) > 0) {
                $rowakun = mysqli_fetch_array($sql_login);
                $_SESSION['user'] = $rowakun['level'];
                $_SESSION['nama_user'] = $rowakun['nama_user'];
                $_SESSION['alamat'] = $rowakun['alamat'];
                $_SESSION['jenis_kelamin'] = $rowakun['jenis_kelamin'];
                $_SESSION['no_telp'] = $rowakun['no_telp'];
               
                ?>
                
                <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                <div class="alert alert-success" role="alert" id="success_message">Login Sukses <i class="glyphicon glyphicon-thumbs-up"></i></div>
                </div>
                </div>
                <meta http-equiv='refresh' content='1;url=/rumahsakit'>


                <?php

            } else { ?>

                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <strong>Login gagal</strong> Username / Password salah
                            </div>
                        </div>
                    </div>

                    <?php
            }
        }
        ?>

            <form action="" method="post" class="navbar-form">
                <div class="input-group" style="padding-bottom: 10px;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-primary"></i></span>
                    <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                </div>
                <div class="input-group" style="padding-bottom: 10px;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock text-primary"></i></span>
                    <input type="password" name="pass" class="form-control"  placeholder="Password" required>
                </div>
    
                <div class="input-group" style="padding-bottom: 10px;">                 
                    <input type="submit" name="login" class="btn btn-primary" value="Login">

                  
                </div>
                
            </form>

            <br>
            <br>

            
        </div>
    </div>
    
    </div> 
    
    <script src="<?=base_url('_asset/js/jquery.js')?>"></script>
    <script src="<?=base_url('_asset/js/bootstrap.min.js')?>"></script>

</body>

</html>

<?php
}
?>