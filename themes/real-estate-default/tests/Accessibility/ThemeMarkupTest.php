<?php

declare(strict_types=1);

it('ships the accessibility primitives required by the theme contract', function (): void {
    $layout = file_get_contents(getcwd().'/resources/views/layouts/app.blade.php');

    expect($layout)->toContain('re-skip-link')
        ->and($layout)->toContain('aria-label')
        ->and($layout)->toContain('id="main-content"')
        ->and(file_get_contents(getcwd().'/resources/css/app.css'))->toContain('prefers-reduced-motion')
        ->and(file_get_contents(getcwd().'/resources/css/app.css'))->toContain('forced-colors');
});
