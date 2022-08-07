<?php

require_once __DIR__ . '/app/init.php';

echo "================================<br><br>";

$persegi_1 = new Persegi;
$persegi_1->setSisi(20);
echo "Sisi Persegi : {$persegi_1->getSisi()}";
echo "<br><br>";
echo "Luas Persegi : {$persegi_1->luas()}";
echo "<br><br>";
echo 'Keliling Persegi: ' . $persegi_1->keliling();

echo "<br><br>================================<br><br>";

$persegi_panjang_1 = new PersegiPanjang;
$persegi_panjang_1->setPanjang(80);
$persegi_panjang_1->setLebar(24);
echo "Panjang persegi panjang : {$persegi_panjang_1->getPanjang()}";
echo "<br><br>";
echo "Lebar persegi panjang : {$persegi_panjang_1->getLebar()}";
echo "<br><br>";
echo "Luas persegi panjang : {$persegi_panjang_1->luas()}";
echo "<br><br>";
echo "Keliling persegi panjang : {$persegi_panjang_1->keliling()}";

echo "<br><br>================================<br><br>";

$segitiga_1 = new Segitiga;
$segitiga_1->setAlas(9);
$segitiga_1->setTinggi(12);
echo "Alas Segitiga : {$segitiga_1->getAlas()}";
echo "<br><br>";
echo "Tinggi Segitiga : {$segitiga_1->getTinggi()}";
echo "<br><br>";
echo "Luas Segitiga : {$segitiga_1->luas()}";
echo "<br><br>";
echo "Keliling Segitiga : {$segitiga_1->keliling()}";

echo "<br><br>================================";
