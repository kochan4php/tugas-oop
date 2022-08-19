<?php 
//Contoh penggunaan interface
/*
Tugas buat object limas, kerucut dan tabung, balok 
yang mengimplementasikan interface bangunruang untuk menghitung luas dan volume
*/
// interface bangunruang{
//     public function luas();
//     public function volume();

// }

// class bola implements bangunruang{
//     public $r ;
//     public function luas() : int
//     {
//         return 4*(22/7)*($this->r*$this->r);
//     }
//     public function volume() : int
//     {   
//         return (4/3)*(22/7)*($this->r*$this->r*$this->r);
//     }
// }

// class kubus implements bangunruang{
//     public $sisi;
//     public function luas(){
//         return 6*$this->sisi*$this->sisi;
//     }
//     public function volume()
//     {
//         return $this->sisi*$this->sisi*$this->sisi;
//     }
// }

// class tabung implements bangunruang{
//     public function luas(){

//     }
//     public function volume(){

//     }
// }

// $bola = new bola();
// $bola->r = 21;
// echo "==================================</p>";
// echo "+     Menghitung luas dan Volume Bola     +</p>";
// echo "==================================</p>";
// echo "Panjang Jari-jari ".$bola->r."</p>";
// echo "Luas Permukaan Bola = ".$bola->luas()."</p>";
// echo "Volume  Bola = ".$bola->volume();