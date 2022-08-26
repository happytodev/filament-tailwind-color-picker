<?php

namespace HappyToDev\FilamentTailwindColorPicker;

use HappyToDev\FilamentTailwindColorPicker\Commands\FilamentTailwindColorPickerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTailwindColorPickerServiceProvider extends PackageServiceProvider
{
    protected array $styles = [
        'filamentTailwindColorPicker' => __DIR__ . '/../dist/css/filamentTailwindColorPicker.css',
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
