<?php
$namaDepan = "Fairly";
$arrayNamaDepan = str_split($namaDepan);
$kotaDefault = "Jawa Timur";
$boolDitemukan = false; 

$arrayKota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makasar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara"
);

foreach ($arrayNamaDepan as $huruf) {
    foreach ($arrayKota as $kota) {
        if (strtolower($huruf) == strtolower($kota[0])) {
            $boolDitemukan = true;
            echo $kota;

            break 2;
        }
    }
    
}

if ($boolDitemukan == false) {
    echo $kotaDefault;
}
?>