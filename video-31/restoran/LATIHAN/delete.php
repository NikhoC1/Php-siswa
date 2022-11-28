<?php

require_once("../function.php");

$sql = "DELETE FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query($koneksi,$sql);

header("http://localhost/php-siswa/video-21/restoran/kategori/select.php");

?>
