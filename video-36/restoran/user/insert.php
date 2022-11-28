<h3>Insert User</h3>
    <form action="" method="post">
        <div class="form-group w-50 mb-3">
            <label for="">Nama user</label>
            <input type="text" name="user" require placeholder="isi user" class="form-control">
        </div>
    
        <div class="form-group w-50 mt-3 mb-3">
            <label for="">Email</label>
            <input type="email" name="email" require placeholder="email" class="form-control">
        </div>

        <div class="form-group w-50 mt-3 mb-3">
            <label for="">Password</label>
            <input type="password" name="password" require placeholder="password" class="form-control">
        </div>

        <div class="form-group w-50 mt-3 mb-3">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" require placeholder="password" class="form-control">
        </div>

        <div class="form-group w-50 mt-3 mb-3">
            <label for="">Level</label> <br>
            <select name="level" id="">
                <option value="admin">admin</option>
                <option value="koki">koki</option>
                <option value="kasir">kasir</option>
            </select>
            
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>

<?php

if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    $level = $_POST['level'];
    if ($password === $konfirmasi) {
        $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
        $db->runSQL($sql);
        header("location:?=user&m=select");
    }else {
        echo "<h2>Password tidak sama</h2>";
    }

}

?>