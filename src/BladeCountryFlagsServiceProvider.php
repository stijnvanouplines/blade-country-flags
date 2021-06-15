<?php

declare(strict_types=1);

namespace StijnVanouplines\BladeCountryFlags;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeCountryFlagsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-country-flags', []);

            $factory->add('country-flags', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-country-flags.php', 'blade-country-flags');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-country-flags'),
            ], 'blade-country-flags');

            $this->publishes([
                __DIR__.'/../config/blade-country-flags.php' => $this->app->configPath('blade-country-flags.php'),
            ], 'blade-country-flags-config');
        }
    }
}
