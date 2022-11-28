<?php
require_once("../function.php");

$sql = "SELECT * FROM tblkategori WHERE idkategori =$id";
$result = mysqli_query($koneksi,$sql);
$row=mysqli_fetch_assoc($result);

// $kategori = 'mcdonald';
// $id=15;
// $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= $id";
// $result=mysqli_query($koneksi,$sql);
// echo $sql;



?>

<form action="" method="post">
    kategori
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <input type="submit" name="simpan" value="simpan">
</form>

<?php

if (isset($_GET['simpan'])) {
    $kategori = $_POST['kategori'];
    echo $kategori;
    $sql = "UPDATE tbl kategori SET kategori='kategori' WHERE idkategori=$id";
    header ("http://localhost/php-siswa/video-22/restoran/kategori/select.php");
}

?>