<?php

// Array dimensi

$nama= array("Satu" , "Dua" , "tiga" , "empat" , 5 , 5.5);

var_dump($nama);

echo "<br>";

echo $nama [5];

echo "<br>";

// for ($i=0; $i < 6; $i++) { 
//     // echo $i;
//     echo $nama[$i]."<br>";
// }

foreach ($nama as $key) {
    echo $key."<br>";
}

// Array asosiatif

$nama =array(
    "satu"  => "sepuluh",
    "dua"   => "dua puluh",
    "tiga"  => "tiga puluh",
    "empat" => "empat puluh"
);

var_dump($nama);

echo "<br>";

echo $nama['dua'];

echo "<br>";

foreach ($nama as $key => $value) {
    echo $key." => ".$value;
    echo "<br>";
    
}