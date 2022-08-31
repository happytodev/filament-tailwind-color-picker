

# Specific Tailwindcss color picker for Filamentphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/happytodev/filament-tailwind-color-picker.svg?style=flat-square)](https://packagist.org/packages/happytodev/filament-tailwind-color-picker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/happytodev/filament-tailwind-color-picker/run-tests?label=tests)](https://github.com/happytodev/filament-tailwind-color-picker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/happytodev/filament-tailwind-color-picker/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/happytodev/filament-tailwind-color-picker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/happytodev/filament-tailwind-color-picker.svg?style=flat-square)](https://packagist.org/packages/happytodev/filament-tailwind-color-picker)

This plugin add a field in Filament Form to help you to select color in the Tailwind color's palette.

<p align="left">
    <img src="https://repository-images.githubusercontent.com/527925032/2ba4807c-602d-47e4-af39-1b0c2ecc6a7f" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

## Screenshots 

### Single Tailwind Color Picker in Filament

![SCR-20220831-umu](https://user-images.githubusercontent.com/425998/187783109-a8b4f056-c521-4d38-8467-9b518870c261.png)

### Code integration example

![SCR-20220831-usl](https://user-images.githubusercontent.com/425998/187783516-cf723e67-c125-4409-b134-a90f6c8d4f9c.png)

### Filament Tailwind Color Picker works perfectly with other filaments fields

![SCR-20220825-mge](https://user-images.githubusercontent.com/425998/187783569-d96e65ee-2eec-420f-9e03-881555aa7792.png)

### Responsive on 1280x1024

![1280x1024-SCR-20220831-w9u](https://user-images.githubusercontent.com/425998/187786047-2a5e0b96-fd4f-4b7a-a7ba-ba801894c898.png)

### Responsive on iPhone 12 Pro

![390x844-iphone12pro-SCR-20220831-wdc](https://user-images.githubusercontent.com/425998/187786776-0b25d969-bfe0-46a9-a209-44aee0b55e17.png)

## Support us

[You can support the development of this open-source package here](https://github.com/sponsors/happytodev)


## Installation

You need first a Filament installation working. For that, please read instructions on the Filament website.

You can install the package via composer:

```bash
composer require happytodev/filament-tailwind-color-picker
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-tailwind-color-picker-views"
```

## Usage

For adding a background color picker : 

```php
    TailwindColorPicker::make('backgroundColor')
        ->bgScope(),
```

When user choose a color in the tailwindcss palette, the value returned by the form will be for example :

`bg-red-300`

For adding a text color picker : 

```php
    TailwindColorPicker::make('backgroundColor')
        ->textScope(),
```

When user choose a color in the tailwindcss palette, the value returned by the form will be for example :

`text-red-300`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Frédéric Blanc](https://github.com/happytodev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
