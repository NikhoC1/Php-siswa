<form action=""method="post">
    <input type="number" name="nomor1">
    inputkan nomor
    <input type="number" name="nomor2">
    inputkan nomor
    <button type="submit" name="tambah" value="tambah">tambah</button>
    <button type="submit" name="kurang" value="kurang">kurang
        
    </button>
</form>

<?php


if (isset($_POST['tambah'])) {
    $nomor1 = $_POST ['nomor1'];
    $nomor2 = $_POST ['nomor2'];
    $hasil = $nomor1 + $nomor2;
    echo $hasil;
}

if (isset($_POST['kurang'])) {
    $nomor1 = $_POST ['nomor1'];
    $nomor2 = $_POST ['nomor2'];
    $hasil = $nomor1 - $nomor2;
    echo $hasil;

}

// $a = 4;
// $b = 3;

// echo $a + $b;

// echo '<br>';

// echo $a - $b;

// echo '<br>';

// echo $a * $b;