<?php
include_once('../_header.php');
 
?>

<form>
<div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr style="background-color: blue;">                     
                    <th>No.</th>
                    <th><i class="glyphicon glyphicon-comment"></i> Nama Obat</th>                    
                    <th><i class="glyphicon glyphicon-home"></i> Keterangan</th>
                    <th><i class="glyphicon glyphicon-home"></i> Aturan</th>
                    <th>
                        <center>
                        <input type="checkbox" id="select_all" value="">
                        </center> 
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $sql_pilih = mysqli_query($con, "SELECT * FROM tb_obat") or die (musqli_error($con));
            while($data = mysqli_fetch_array($sql_pilih)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_obat'] ?></td>
                    <td><?= $data['ket_obat'] ?></td>
                    <td><?= $data['aturan'] ?></td>
                    <td align="center">
                    <input type="checkbox" name="checked[]" class="check" value="<?=$data['id_obat']?>">
                    </td>
                    
                </tr>
               
            </tbody>
            <?php
            }
            ?>
        </table>
</div>
</form>

<div class="box pull-right">
   <button class="btn btn-primary btn-sm" onclick="pilih()"><i class="glyphicon glyphicon-plus"></i> Pilih</button>
 
</div>

<script>

$(document).ready(function() {
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

    function pilih() {
        document.proses.action = 'add.php';
        document.proses.submit();
    }

</script>


<?php
include_once('../_footer.php');
?>