<?php

namespace UnexpectedJourney\FilamentStickyResourceFormFooters;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use UnexpectedJourney\FilamentStickyResourceFormFooters\Commands\FilamentStickyResourceFormFootersCommand;
use UnexpectedJourney\FilamentStickyResourceFormFooters\Testing\TestsFilamentStickyResourceFormFooters;

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
