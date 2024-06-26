<?php

declare(strict_types=1);

namespace BladeFreetrack\BladeFreetrackIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeFreetrackIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-freetrack-icons', []);

            $factory->add('freetrack-icons', array_merge(['path' => public_path('svg')], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-freetrack-icons.php', 'blade-freetrack-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([ public_path('svg') => public_path('vendor/blade-freetrack-icons'), ], 'blade-freetrack-icons');

            $this->publishes([
                __DIR__ . '/../config/blade-freetrack-icons.php' => $this->app->configPath('blade-freetrack-icons.php'),
            ], 'blade-freetrack-icons-config');
        }
    }
}
