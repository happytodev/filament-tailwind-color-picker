<?php

namespace HappyToDev\FilamentTailwindColorPicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HappyToDev\FilamentTailwindColorPicker\FilamentTailwindColorPicker
 */
class FilamentTailwindColorPicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HappyToDev\FilamentTailwindColorPicker\FilamentTailwindColorPicker::class;
    }
}
