<nav>
    <li>bakso</li>
    <li>soto</li>
    <li>pentol</li>
</nav>

<?php
if (isset ($_POST['kirim'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    echo '<br>';
    echo $password;
}