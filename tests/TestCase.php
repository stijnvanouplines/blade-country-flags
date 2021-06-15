<?php

namespace StijnVanouplines\BladeCountryFlags\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench;
use StijnVanouplines\BladeCountryFlags\BladeCountryFlagsServiceProvider;

class TestCase extends Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeCountryFlagsServiceProvider::class,
        ];
    }
}
