<?php
include_once('../_header.php');
?>
       
       
                <div class="row">
                    <div class="col-lg-12">
                        <h1><a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-chevron-left"></i></a> Dashboard <i class="glyphicon glyphicon-cog"></i> </h1>
                        

                        <div class="pull-right">
                                   
                        <a href="index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
                        
                        </div>

                        <form action="proses.php" method="post" enctype="multipart/form-data">

                        <?php
                        $sql_dash = mysqli_query($con, "SELECT * FROM tb_dashboard") or die (mysqli_error($con));
                        $data = mysqli_fetch_array($sql_dash);
                        ?>

                        <div class="form-group">
                            <label for="header">Header</label>
                            <textarea name="header" id="header" class="form-control" required><?=$data['header']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required><?=$data['alamat']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea name="isi" id="isi" class="form-control" required><?=$data['isi']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="footer">Footer</label>
                            <textarea name="footer" id="footer" class="form-control" required><?=$data['footer']?></textarea>
                        </div>
                        <div class="form-group">
                            
                        </div>
                        
                      

                        <hr>

                        <div class="form-group pull-right">
                            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                        </div>                        
                        
                        </form>
                        
                        
                    </div>

                <script>
                    CKEDITOR.replace( 'header', {
                        uiColor: '#ec971f'
                    } );
                </script>
                 <script>
                    CKEDITOR.replace( 'alamat', {
                        uiColor: '#ec971f'
                    } );
                </script>
                <script>
                    CKEDITOR.replace( 'isi', {
                        uiColor: '#ec971f'
                    } );
                </script>
                <script>
                    CKEDITOR.replace( 'footer', {
                        uiColor: '#ec971f'
                    } );
                </script>
                

                </div>
            

<?php
include_once('../_footer.php');
?>
