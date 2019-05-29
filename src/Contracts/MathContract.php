<?php

namespace App\Contracts;

interface MathContract {
    public function multiply(int $x, int $y): int;
    public function subtract(int $a, int $b): int;
    public function add(int $c, int $e): int;
}
