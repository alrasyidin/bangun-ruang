<?php

namespace Hamstergeek\BangunRuang\Tests;

use Hamstergeek\BangunRuang\Tests\TestCase;
use Hamstergeek\BangunRuang\Facades\PersegiPanjang;


class PersegiPanjangTest extends TestCase
{
    public function testHitungLuas() {
        $panjang = 10;
        $lebar = 5;

        $hasil = PersegiPanjang::luas($panjang, $lebar);

        $this->assertEquals($hasil, 50);
    }

    public function testHitungKeliling(){
        $panjang = 10;
        $lebar = 5;

        $hasil = PersegiPanjang::keliling($panjang, $lebar);
        $this->assertEquals($hasil, 30);
    }
}