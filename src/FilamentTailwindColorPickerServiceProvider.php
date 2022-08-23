<?php

namespace HappyToDev\FilamentTailwindColorPicker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use HappyToDev\FilamentTailwindColorPicker\Commands\FilamentTailwindColorPickerCommand;

class FilamentTailwindColorPickerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-tailwind-color-picker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-tailwind-color-picker_table')
            ->hasCommand(FilamentTailwindColorPickerCommand::class);
    }
}