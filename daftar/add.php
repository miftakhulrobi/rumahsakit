<?php
include_once('../_header.php');
 
?>

<div class="box">
    <h1>Operator</h1>
    <h4>
        <small>Tambah Data Operator</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" required> Laki-laki                           
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" required> Perempuan                           
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="telp">No. Telepon</label>
                    <input type="number" name="telp" id="telp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="level" id="level" value="admin" required> Admin                           
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="level" id="level" value="operator" required> Operator                           
                        </label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="add" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once('../_footer.php');
?>