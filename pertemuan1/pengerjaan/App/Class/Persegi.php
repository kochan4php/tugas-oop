<?php

require_once __DIR__ . '/../Interface/BangunDatar.php';

class Persegi implements BangunDatar
{
  private int|float $sisi;

  public function setSisi(int|float $sisi): void
  {
    $this->sisi = $sisi;
  }

  public function getSisi(): int|float
  {
    return $this->sisi;
  }

  public function luas(): int|float
  {
    $luas = $this->sisi ** 2;
    return $luas;
  }

  public function keliling(): int|float
  {
    $keliling = $this->sisi * 4;
    return $keliling;
  }
}
