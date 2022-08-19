<?php

require_once __DIR__ . '/../Interface/BangunRuang.php';

final class Kerucut implements BangunRuang
{
  private int|float $jari2, $tinggi, $garisPelukis;

  public function __construct($jari2, $tinggi, $garisPelukis)
  {
    $this->jari2 = $jari2;
    $this->tinggi = $tinggi;
    $this->garisPelukis = $garisPelukis;
  }

  public function luas(): int|float
  {
    return ((22 / 7) * $this->jari2 ** 2) + ((22 / 7) * $this->jari2 * $this->garisPelukis);
  }

  public function volume(): int|float
  {
    return (1 / 3) * (22 / 7) * ($this->jari2 ** 2) * $this->tinggi;
  }
}
