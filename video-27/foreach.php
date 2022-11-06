<?php

// $nama = array ('sains','fisika','multi media',100)

// var_dump ($nama);

// echo "<br>";

// foreach ($nama as $key => $value) {
//     echo $key.'<br>';
// }

$nama = array(
"sains" => "kimia",
"fisika" => "alam",
"multi media" => "editor"
);

var_dump($nama);

foreach ($nama as $key => $value) {
    echo $key.'-'.$value;
    echo "<br>";
}