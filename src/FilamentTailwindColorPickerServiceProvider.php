<?php

namespace HappyToDev\FilamentTailwindColorPicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentTailwindColorPickerServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-tailwind-color-picker-styles' => __DIR__ . '/../resources/dist/ftcp.css',
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-tailwind-color-picker')
            ->hasViews();
    }
}
