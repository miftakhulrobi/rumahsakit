<?php

include_once('../_header.php');

if(@$_SESSION['user'] == "admin") {
?>

<div class="box">

    <h1><a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-chevron-left"></i></a> Operator</h1>
    <h4>
        <small>Data Operator</small>
        <div class="pull-right">
            <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>            
            <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Operator</a>
        </div>
    </h4>

<form method="post" name="proses">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dokter">
            <thead>
                <tr style="background-color: blue;">  
                    <th>
                        <center>
                        <input type="checkbox" id="select_all" value="">
                        </center>
                    </th>                   
                    <th>No.</th>
                    <th><i class="glyphicon glyphicon-user"></i> Nama Operator</th>                    
                    <th><i class="glyphicon glyphicon-info-sign"></i> Jenis Kelamin</th>
                    <th><i class="glyphicon glyphicon-map-marker"></i> Alamat</th>
                    <th><i class="glyphicon glyphicon-earphone"></i> No. Telepon</th>
                    <th><i class="glyphicon glyphicon-level-up"></i> Level</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                    
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                $data_user = mysqli_query($con, "SELECT * FROM tb_user") or die (mysqli_error($con));

              
                    while($data = mysqli_fetch_array($data_user)) { ?>

                        <tr style="background-color: #b8b7b7;">
                            <td align="center">
                                <input type="checkbox" name="checked[]" class="check" value="<?=$data['kode_user']?>">
                            </td>
                            <td><?=$no++?>.</td>
                            <td><?=$data['nama_user']?></td>
                            <td><?=$data['jenis_kelamin'];?></td>
                            <td><?=$data['alamat']?></td>
                            <td><?=$data['no_telp']?></td>
                            <td><?=$data['level']?></td>
                            <td align="center">
                                <a href="edit.php?id=<?=$data['kode_user']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                            
                        </tr>

                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</form>

<div class="box pull-right">
  
   <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
</div>

</div>

<script>
    $(document).ready(function() {

        $('#dokter').DataTable({
            columnDefs: [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": [0, 6]
                }
            ],
            "order": [1, 'asc']
        });

        $('#select_all').on('click', function() {
            
            if(this.checked) {
                $('.check').each(function() {
                    this.checked = true;
                })
            } else {
                $('.check').each(function() {
                    this.checked = false;
                })
            }
        });

        $('.check').on('click', function() {

            if($('.check:checked').length == $('.check').length) {
                $('#select_all').prop('checked', true)
            } else {
                $('#select_all').prop('checked', false)
            }
        })
    })

   

    function hapus() {
        var conf = confirm('Yakin akan menghapus data?');
        if(conf) {
            document.proses.action = 'del.php';
            document.proses.submit();
        }
    }

</script>


<?php
include_once('../_footer.php');
} else {
    echo "Anda tidak mempunyai hak akses pada halaman ini";
}
?>
