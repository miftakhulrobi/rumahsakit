<?php
require_once "_config/config.php";

require "_asset/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}

?>
   
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Rumah Sakit</title>

    <link href="<?=base_url('_asset/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_asset/css/simple-sidebar.css');?>" rel="stylesheet">
    <link href="<?=base_url('_asset/libs/DataTables/datatables.min.css');?>" rel="stylesheet">

    <link rel="icon" href="<?=base_url('_asset/img/r.jpg')?>">


</head>

<body style="background-color: #bceefa;">

    <script src="<?=base_url('_asset/js/jquery.js')?>"></script>
    <script src="<?=base_url('_asset/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_asset/libs/DataTables/datatables.min.js')?>"></script>
    <script src="<?=base_url('_asset/libs/vendor/ckeditor/ckeditor.js')?>"></script>



    
    <div id="wrapper">
        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
                <li class="sidebar-brand">
                
                    <a href=""><span class="text-primary"><i class=""></i> <b>Aplikasi Rumah Sakit</b></a>
                   
                </li>
                

                <li>
                    <a href="<?=base_url('dashboard')?>"><i class="glyphicon glyphicon-home"></i></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('pasien/data.php')?>"><i class="glyphicon glyphicon-list-alt"></i> Data Pasien</a>
                </li>
                <li>
                    <a href="<?=base_url('dokter/data.php')?>"><i class="glyphicon glyphicon-user"></i> Data Dokter</a>
                </li>
                <li>
                    <a href="<?=base_url('poliklinik/data.php')?>"><i class="glyphicon glyphicon-file"></i> Data poliklinik</a>
                </li>
                <li>
                    <a href="<?=base_url('obat/data.php')?>"><i class="glyphicon glyphicon-briefcase"></i> Data Obat</a>
                </li>
                <li>
                    <a href="<?=base_url('rekam_medis/data.php')?>"><i class="glyphicon glyphicon-facetime-video"></i> Rekam Medis</a>
                </li>
                <?php
                if(@$_SESSION['user'] == "admin") {
                ?>
                <li>
                    <a href="<?=base_url('daftar/data.php')?>"><i class="glyphicon glyphicon-th-large"></i> Operator</a>
                </li>
                <?php
                }
                ?>
                <!--<li class="">
                    <a href="<?=base_url('profil/data.php')?>"><span class="text-white"><i class="glyphicon glyphicon-log-in"></i>  <b><?= $_SESSION['user'] ?></b></a>
                </li>-->
                <li class="">
                    <a href=""><span class="text-info"><i class="glyphicon glyphicon-time"></i> <?= date('d-M-Y') ?></a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger"><i class="glyphicon glyphicon-off"></i> Logout</span></a>
                </li>

               
     
                
               
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">

