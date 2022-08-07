<?php

require_once __DIR__ . '/../Interface/BangunDatar.php';

class PersegiPanjang implements BangunDatar
{
  private int|float $panjang;
  private int|float $lebar;

  public function setPanjang(int|float $panjang): void
  {
    $this->panjang = $panjang;
  }

  public function setLebar(int|float $lebar): void
  {
    $this->lebar = $lebar;
  }

  public function getPanjang(): int|float
  {
    return $this->panjang;
  }

  public function getLebar(): int|float
  {
    return $this->lebar;
  }

  public function luas(): int|float
  {
    $luas = $this->panjang * $this->lebar;
    return $luas;
  }

  public function keliling(): int|float
  {
    $keliling = 2 * ($this->panjang + $this->lebar);
    return $keliling;
  }
}
