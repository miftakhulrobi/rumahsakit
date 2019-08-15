<?php
require_once "../_config/config.php";

require "../_asset/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    $aturan = trim(mysqli_real_escape_string($con, $_POST['aturan']));
    mysqli_query($con, "INSERT INTO tb_obat (id_obat, nama_obat, ket_obat, aturan) VALUES ('$uuid', '$nama', '$ket', '$aturan')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    $aturan = trim(mysqli_real_escape_string($con, $_POST['aturan']));
    mysqli_query($con, "UPDATE tb_obat SET nama_obat = '$nama', ket_obat = '$ket', aturan = '$aturan' WHERE id_obat = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>






