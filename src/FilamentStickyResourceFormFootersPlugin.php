<?php

namespace UnexpectedJourney\FilamentStickyResourceFormFooters;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Facades\FilamentAsset;

class FilamentStickyResourceFormFootersPlugin implements Plugin
{
    use EvaluatesClosures;

    protected bool | null | Closure $isColored = null;

    protected bool | null | Closure $isFloating = null;

    public function boot(Panel $panel): void
    {
        FilamentAsset::registerScriptData([
            'stickyResourceFormFooterTheme' => $this->getTheme(),
        ], 'unexpectedjourney/sticky-resource-form-footers');
    }

    public function colored(bool | null | Closure $condition = true): static
    {
        $this->isColored = $condition;

        return $this;
    }

    public function floating(bool | null | Closure $condition = true): static
    {
        $this->isFloating = $condition;

        return $this;
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function getId(): string
    {
        return 'filament-sticky-resource-form-footers';
    }

    public function isColored(): bool
    {
        return $this->evaluate($this->isColored) ?? false;
    }

    public function isFloating(): bool
    {
        return $this->evaluate($this->isFloating) ?? false;
    }

    public function getTheme(): string
    {
        if ($this->isFloating()) {

            if ($this->isColored()) {
                return 'floating-colored';
            }

            return 'floating';
        }

        return 'default';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function register(Panel $panel): void
    {
    }
}
