<?php

declare(strict_types=1);

it('declares responsive states and logical direction support', function (): void {
    $css = file_get_contents(getcwd().'/resources/css/app.css');

    expect($css)->toContain('@media (max-width: 48rem)')
        ->and($css)->toContain('@media (max-width: 32rem)')
        ->and($css)->toContain("[dir='rtl']")
        ->and($css)->toContain('color-scheme: dark');
});
