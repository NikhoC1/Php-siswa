<h3>Insert Kategori</h3>
<div class="form-group w-50">
    <form action="" method="post">
        <div>
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" require placeholder="isi kategori" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
    $db->runSQL($sql);
    header("location:?=kategori&m=select");
}

?>