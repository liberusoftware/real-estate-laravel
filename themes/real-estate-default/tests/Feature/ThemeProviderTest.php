<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;

it('registers the package views and translations', function (): void {
    expect(View::exists('theme-real-estate-default::layouts.app'))->toBeTrue()
        ->and(Lang::has('theme-real-estate-default::messages.brand'))->toBeTrue();
});
