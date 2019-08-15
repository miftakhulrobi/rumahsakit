<?php
require_once "../_config/config.php";

require "../_asset/libs/vendor/autoload.php";


if(isset($_POST['add'])) {
    
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
    $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
    $level = trim(mysqli_real_escape_string($con, $_POST['level']));
    mysqli_query($con, "INSERT INTO tb_user (nama_user, username, password, jenis_kelamin, alamat, no_telp, level) VALUES ('$nama', '$user', sha1('$pass'), '$jenis_kelamin', '$alamat', '$telp', '$level') ") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
    
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
    $level = trim(mysqli_real_escape_string($con, $_POST['level']));
    mysqli_query($con, "UPDATE tb_user SET nama_user = '$nama', username = '$user', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$telp', level = '$level' WHERE kode_user = '$id' ") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>