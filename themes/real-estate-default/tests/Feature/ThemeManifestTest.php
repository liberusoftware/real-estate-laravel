<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;

it('declares the real estate theme contract', function (): void {
    $manifest = json_decode(File::get(getcwd().'/theme.json'), true, flags: JSON_THROW_ON_ERROR);

    expect($manifest['name'])->toBe('real-estate-default')
        ->and($manifest['parent'])->toBe('default')
        ->and($manifest['type'])->toBe('public')
        ->and($manifest['assets']['css'])->toContain('resources/css/app.css')
        ->and($manifest['assets']['js'])->toContain('resources/js/app.js')
        ->and($manifest['adapters']['blade']['entrypoints'])->toHaveCount(2)
        ->and($manifest['adapters']['livewire']['fallback'])->toContain('Blade');
});

it('keeps every declared asset inside the package', function (): void {
    $manifest = json_decode(File::get(getcwd().'/theme.json'), true, flags: JSON_THROW_ON_ERROR);

    foreach (array_merge($manifest['assets']['css'], $manifest['assets']['js']) as $asset) {
        expect(File::isFile(getcwd().'/'.$asset))->toBeTrue();
    }
});
