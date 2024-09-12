<?php

include 'hitungLuas.php';
include 'Persegi.php';
include 'Segitiga.php';
include 'Lingkaran.php';

$persegi = new Persegi(4);
$segitiga = new Segitiga(4, 6);
$lingkaran = new Lingkaran(5);

echo "Luas Persegi: " . $persegi->hitungLuasPersegi() . PHP_EOL;
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga() . PHP_EOL;
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran() . PHP_EOL;


