<?php

namespace Hamstergeek\BangunRuang\Tests;

use \Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase{
    protected function getPackageProviders($app) {
        return [\Hamstergeek\BangunRuang\Providers\BangunRuangServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();
    }
}