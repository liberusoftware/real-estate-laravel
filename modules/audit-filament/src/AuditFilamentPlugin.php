<?php

declare(strict_types=1);

namespace Liberu\Foundation\AuditFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\Foundation\AuditFilament\Resources\ActivityLogResource;

final class AuditFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'audit-filament';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([ActivityLogResource::class]);
    }

    public function boot(Panel $panel): void {}
}
