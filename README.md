# Make Filament create/edit page form footers sticky.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/unexpectedjourney/filament-sticky-resource-form-footers.svg?style=flat-square)](https://packagist.org/packages/unexpectedjourney/filament-sticky-resource-form-footers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/unexpectedjourney/filament-sticky-resource-form-footers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/unexpectedjourney/filament-sticky-resource-form-footers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/unexpectedjourney/filament-sticky-resource-form-footers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/unexpectedjourney/filament-sticky-resource-form-footers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/unexpectedjourney/filament-sticky-resource-form-footers.svg?style=flat-square)](https://packagist.org/packages/unexpectedjourney/filament-sticky-resource-form-footers)

Add sticky footers to the Creat/Edit pages of your Filament resources. Inspired heavily by https://github.com/awcodes/filament-sticky-header/.

## Installation

You can install the package via composer:

```bash
composer require unexpectedjourney/filament-sticky-resource-form-footers
```

## Usage

Just add the plugin to your panel provider, and you're good to go.

```php
use UnexpectedJourney\FilamentStickyResourceFormFooters\FilamentStickyResourceFormFootersPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentStickyResourceFormFootersPlugin::make(),
        ])
    ])
}
```

### Floating Theme

To use the 'Floating Theme' use the `floating()` method when instantiating the plugin.

When using the floating theme you can also use the `colored()` method to add your primary background color to the footer.

```php
use UnexpectedJourney\FilamentStickyResourceFormFooters\FilamentStickyResourceFormFootersPlugin;


public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentStickyResourceFormFootersPlugin::make()
                ->floating()
                ->colored()
        ])
    ]);
}
```

Both the `floating()` and `colored()` methods can receive closure that will be evaluated to determine if the theme should be applied. This allows you to apply the theme conditionally, for instance, based off of user preferences.

```php
use UnexpectedJourney\FilamentStickyResourceFormFooters\FilamentStickyResourceFormFootersPlugin;


public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentStickyResourceFormFootersPlugin::make()
                ->floating(fn():bool => auth()->user()->use_floating_header)
                ->colored(fn():bool => auth()->user()->use_floating_header)
        ])
    ]);
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Craig](https://github.com/craigkuhns)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
