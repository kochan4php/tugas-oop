<?php

require_once __DIR__ . '/../Interface/BangunRuang.php';

final class Tabung implements BangunRuang
{
  private int|float $jari2;
  private int|float $tinggi;

  public function __construct($jari2, $tinggi)
  {
    $this->jari2 = $jari2;
    $this->tinggi  = $tinggi;
  }

  public function luas(): int|float
  {
    return 2 * (22 / 7) * $this->jari2 * ($this->jari2 + $this->tinggi);
  }

  public function volume(): int|float
  {
    return (22 / 7) * ($this->jari2 ** 2) * $this->tinggi;
  }
}
