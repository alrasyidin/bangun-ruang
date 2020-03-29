<?php

namespace Hamstergeek\BangunRuang\Helpers;


class PersegiPanjang
{
    public function luas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    public function keliling($panjang, $lebar) {
        return 2 * ($panjang - $lebar);
    }
}