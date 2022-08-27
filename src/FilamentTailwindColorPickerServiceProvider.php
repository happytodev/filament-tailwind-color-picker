<?php

namespace HappyToDev\FilamentTailwindColorPicker;

use HappyToDev\FilamentTailwindColorPicker\Commands\FilamentTailwindColorPickerCommand;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTailwindColorPickerServiceProvider extends PackageServiceProvider
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
            // ->hasConfigFile()
            // ->hasAssets()
            ->hasViews();
        // ->hasMigration('create_filament-tailwind-color-picker_table')
        // ->hasCommand(FilamentTailwindColorPickerCommand::class);
    }
}
