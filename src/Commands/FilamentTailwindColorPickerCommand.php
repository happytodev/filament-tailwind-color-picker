<?php

namespace HappyToDev\FilamentTailwindColorPicker\Commands;

use Illuminate\Console\Command;

class FilamentTailwindColorPickerCommand extends Command
{
    public $signature = 'filament-tailwind-color-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
