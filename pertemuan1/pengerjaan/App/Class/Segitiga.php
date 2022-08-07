<?php

require_once __DIR__ . '/../Interface/BangunDatar.php';

class Segitiga implements BangunDatar
{
  protected int|float $alas;
  protected int|float $tinggi;

  public function setAlas(int|float $alas): void
  {
    $this->alas = $alas;
  }

  public function setTinggi(int|float $tinggi): void
  {
    $this->tinggi = $tinggi;
  }

  public function getAlas(): int|float
  {
    return $this->alas;
  }

  public function getTinggi(): int|float
  {
    return $this->tinggi;
  }

  public function luas(): int|float
  {
    $luas = ($this->alas * $this->tinggi) / 2;
    return $luas;
  }

  public function keliling(): int|float
  {
    $sisi_miring = sqrt((($this->alas ** 2) + ($this->tinggi ** 2)));
    $keliling = $this->alas + $this->tinggi + $sisi_miring;
    return $keliling;
  }
}
