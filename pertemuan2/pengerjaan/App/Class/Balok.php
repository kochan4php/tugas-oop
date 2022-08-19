<?php

require_once __DIR__ . '/../Interface/BangunRuang.php';

final class Balok implements BangunRuang
{
  private int|float $panjang, $lebar, $tinggi;

  public function __construct($panjang, $lebar, $tinggi)
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
    $this->tinggi = $tinggi;
  }

  public function luas(): int|float
  {
    $luas = 2 * (
      ($this->panjang * $this->lebar) + ($this->lebar * $this->tinggi) + ($this->panjang * $this->tinggi)
    );

    return $luas;
  }

  public function volume(): int|float
  {
    return $this->panjang * $this->lebar * $this->tinggi;
  }
}
