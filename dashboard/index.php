

<?php
include_once('../_header.php');


?>
       
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

     
<div class="row">

<div class="col-lg-12">

<div class="pull-right">

    <a href=""><span class="text-info"><i class="glyphicon glyphicon-time"></i> <b><?= date('d-M-Y') ?></b></a>

    <a><b><h4> <?=$_SESSION['nama_user']?></h4></b></a>

    <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
               
    
    <a href="edit.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit Dashboard</a>    

</div>


<div class="container">
    
<?php
$sql_dash = mysqli_query($con, "SELECT * FROM tb_dashboard") or die (mysqli_error($con));
while($data = mysqli_fetch_array($sql_dash)) {
?>
                   
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-chevron-left"></i></a><h1><?=$data['header']?></h1>    
<p><?=$data['alamat']?></p>

<br> 

</div>

</div>


<div class="panel-group">
    
    <div class="panel-body">
        
    <?=$data['isi']?>

    </div>

   

    <div class="panel-footer">
    <center>  
    <?=$data['footer']?>
    </center>
    </div>

<?php
}
?>

</div>                                    

</div>                          


<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>


                       

<?php
include_once('../_footer.php');
?>

