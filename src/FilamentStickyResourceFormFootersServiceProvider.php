<?php

namespace UnexpectedJourney\FilamentStickyResourceFormFooters;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentStickyResourceFormFootersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-sticky-resource-form-footers');
    }

    public function packageRegistered(): void
    {
        FilamentAsset::register([
            Css::make('sticky-resource-form-footers', __DIR__ . '/../resources/dist/filament-sticky-resource-form-footers.css'),
            Js::make('sticky-resource-form-footers', __DIR__ . '/../resources/dist/filament-sticky-resource-form-footers.js'),
        ], 'unexpectedjourney/sticky-resource-form-footers');
    }
}
