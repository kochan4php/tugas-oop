<?php

require_once __DIR__ . '/../Interface/BangunRuang.php';

final class Bola implements BangunRuang
{
  private int|float $jari2;

  public function __construct($jari2)
  {
    $this->jari2 = $jari2;
  }

  public function luas(): int|float
  {
    return 4 * (22 / 7) * ($this->jari2 ** 2);
  }

  public function volume(): int|float
  {
    return (4 / 3) * (22 / 7) * ($this->jari2 ** 3);
  }
}
