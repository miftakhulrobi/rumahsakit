<?php
include_once('../_header.php');
 
?>

<div class="box">
    <h1>Operator</h1>
    <h4>
        <small>Edit Data Operator</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

        <?php
        $id = @$_GET['id'];
        $sql_user = mysqli_query($con, "SELECT * FROM tb_user WHERE kode_user = '$id'") or die (mysqli_error($con));
        $data = mysqli_fetch_array($sql_user);
        ?>

            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="hidden" name="id" id="id" value="<?= $data['kode_user'] ?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_user'] ?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" class="form-control" value="<?= $data['username'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password [SHA1 system]</label>
                    <input type="text" name="pass" id="pass" class="form-control" value="<?= $data['password'] ?>" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" <?=$data['jenis_kelamin'] == "laki-laki" ? "checked" : null ?> required> Laki-laki                           
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" <?=$data['jenis_kelamin'] == "perempuan" ? "checked" : null ?> required> Perempuan                           
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required><?=$data['alamat']?></textarea>
                </div>
                <div class="form-group">
                    <label for="telp">No. Telepon</label>
                    <input type="number" name="telp" id="telp" value="<?=$data['no_telp']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="level" id="level" value="admin" <?=$data['level'] == "admin" ? "checked" : null ?> required> Admin                           
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="level" id="level" value="operator" <?=$data['level'] == "operator" ? "checked" : null ?> required> Operator                           
                        </label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once('../_footer.php');
?>