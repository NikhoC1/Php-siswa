<form action="" method="get">
Nama :
<input type="text" name="nama">
Alamat :
<input type="text" name="alamat">
<input type="submit" name="kirim" value="simpan">
</form>

<?php

if (isset($_POST['kirim'])) {
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];

    echo $nama;
echo '<br>';
echo $alamat;
}


