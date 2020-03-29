<?php

namespace Hamstergeek\BangunRuang\Tests;

use Orchestra\TestBench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase{
    protected function getPackageProviders($app) {
        return [Hamstergeek\BangunRuang\Providers\BangunRuangServiceProvider::class];
    }
}