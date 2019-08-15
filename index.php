<?php
require_once "_config/config.php";

if(isset($_SESSION['user'], $_SESSION['nama_user'], $_SESSION['alamat'], $_SESSION['jenis_kelamin'], $_SESSION['no_telp'])) {


    echo "<script>window.location='".base_url('dashboard')."';</script>";

} else {
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
?>
