<?php

include "Mahasiswa.php";

// mahasiswa 1
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData("A11.2024.15867", "Ardhi", "Teknik Informatika");

// mahasiswa 2
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData("A12.2024.15768", "Jack", "Sistem Informasi");


// tampilkan Data dengan getData
print_r($mahasiswaTI->getData());
echo "<br><br>";
print_r($mahasiswaSI->getData());

echo "<hr>";

// tampilkan Data dengan method tampilkanData
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();

?>