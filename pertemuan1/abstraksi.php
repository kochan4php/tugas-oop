<?php

class mobil {
    protected $merk;
    protected $warna;
    protected $kapasitasmesin;
    function __construct()
    {
        //ini adalah konstruktor
        $this->merk = 'Suzuki Amenity';
        $this->warna = 'Biru';
        $this->kapasitasmesin = 1500;
    }
    function setWarna($warna = null){
        $this->warna = $warna;
    }
    function getWarna(){
        return $this->warna;
    }
    function setMerk($merk = null){
        $this->merk = $merk;
    }
    function getMerk(){
        return $this->merk;
    }
    function setKapasitas($kapasitasmesin){
        $this->kapasitasmesin = $kapasitasmesin;
    }
    function getKapasitas(){
        return $this->kapasitasmesin;
    }
    function printSpesifikasi(){
        return "Warna :".$this->warna."<p>MERK:".$this->merk."<p>KAPASITAS:".$this->kapasitasmesin;
    }
}

$mobil1 = new mobil();
$mobil1->setWarna('Merah');
$mobil1->setMerk('BMW');
$mobil1->setKapasitas('1500CC');
echo $mobil1->printSpesifikasi();
echo "<p>*========================================*<p>";
$mobil2 = new mobil();
$mobil2->setWarna('HITAM');
$mobil2->setMerk('TOYOTA AVANZA');
$mobil2->setKapasitas('1500CC');
echo $mobil2->printSpesifikasi();
echo "<p>*========================================*<p>";
$mobil3 = new mobil();
$mobil3->setMerk('Honda Civic');
$mobil3->setWarna('Merah');
$mobil3->setKapasitas(2000);
echo $mobil3->printSpesifikasi();