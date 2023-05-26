<?php
$kelompok = array (
    array("Nama" => "Fairly Ardasa", "NIM" => "499475"),
    array("Nama" => "Liu Kang", "NIM" => "499476"),
    array("Nama" => "Kung Lao", "NIM" => "499477"),
    array("Nama" => "Kitana", "NIM" => "499478"),
    array("Nama" => "Jhony Cage", "NIM" => "499479")
);

foreach ($kelompok as $member) {
    $nim = $member["NIM"];
    $nama = $member["Nama"];

    if ($nim % 2 === 0) {
        echo $nama . " sebagai back end developer <br>";
    } else echo $nama . " sebagai front end developer <br>";
    # code...
}




?>