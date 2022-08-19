<?php

require_once __DIR__ . '/../Interface/BangunRuang.php';

final class Kubus implements BangunRuang
{
  private int|float $sisi;

  public function __construct($sisi)
  {
    $this->sisi = $sisi;
  }

  public function luas(): int|float
  {
    return 6 * ($this->sisi ** 2);
  }

  public function volume(): int|float
  {
    return $this->sisi ** 3;
  }
}
