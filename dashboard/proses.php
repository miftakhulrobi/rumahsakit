<?php
require_once "../_config/config.php";

require "../_asset/libs/vendor/autoload.php";


if(isset($_POST['edit'])) {
   
    $header =  $_POST['header'];
    $alamat =  $_POST['alamat'];
    $isi = $_POST['isi'];
    $footer = $_POST['footer'];
    // $file =  $_POST['file'];

    mysqli_query($con, "UPDATE tb_dashboard SET header = '$header', alamat = '$alamat', isi = '$isi', footer = '$footer' ") or die (mysqli_error($con));
    echo "<script>window.location='index.php';</script>";

} 
    
 
// ambil data file
$namaFile = $_FILES['file']['name'];
$namaSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../_asset/img/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {   
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}


?>