<?php

namespace HappyToDev\FilamentTailwindColorPicker\Tests;

use HappyToDev\FilamentTailwindColorPicker\FilamentTailwindColorPickerServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'HappyToDev\\FilamentTailwindColorPicker\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentTailwindColorPickerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-tailwind-color-picker_table.php.stub';
        $migration->up();
        */
    }
}
