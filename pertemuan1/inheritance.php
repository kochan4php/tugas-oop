<?php
//Access Modifier
/*
    protected: bisa diakses oleh class tersebut dan class turunannya.
    public: bisa diakses dari class yang bukan merupakan class turunannya 
    private: hanya bisa diakses oleh class tersebut
*/
// class bangundatar
// {
//     protected $luas;
//     protected $keliling;
// }
// class segitiga extends bangundatar
// {
//     public $alas;
//     public $tinggi;
//     function setAlas($x)
//     {
//         $this->alas = $x;
//         return $this->alas;
//     }
//     function setTinggi($t)
//     {
//         $this->tinggi = $t;
//         return $this->tinggi;
//     }
//     function luas()
//     {
//         $luas =  ($this->alas * $this->tinggi) / 2;
//         $this->luas = $luas;
//         return $this->luas;
//     }
//     function keliling()
//     {
//     }
// }
// class persegi extends bangundatar
// {
//     public $panjang;
//     public $lebar;
//     function setVariable($x, $y)
//     {
//         $this->panjang = $x;
//         $this->lebar = $y;
//     }
//     function luas()
//     {
//         return $this->luas = $this->panjang * $this->lebar;
//     }
//     function keliling()
//     {
//     }
// }

// $segitiga = new segitiga();
// $segitiga->setAlas(10);
// $segitiga->setTinggi(7);
// echo "LUAS SEGITIGA : " . $segitiga->luas();
// echo "<p>";

// $segitiga2 = new segitiga();
// $segitiga2->setAlas(20);
// $segitiga2->setTinggi(36);
// echo "alas segitiga :" . $segitiga2->alas;
// echo "<p>";
// echo "Tinggi segitiga :" . $segitiga2->tinggi;
// echo "<p>";
// echo "LUAS SEGITIGA : " . $segitiga2->luas();

// echo "<p>";
// echo "=======================================";
// echo "<p>";
// $persegi = new persegi();
// $persegi->setVariable(80, 24);
// echo "Panjang Persegi :" . $persegi->panjang;
// echo "<p>";
// echo "Lebar Persegi :" . $persegi->lebar;
// echo "<p>";
// echo "LUAS Persegi : " . $persegi->luas();
