<?php

use Illuminate\Support\Facades\Http;
use Liberu\Foundation\Currency\Exceptions\CurrencyMismatch;
use Liberu\Foundation\Currency\Services\OpenExchangeRateApiProvider;
use Liberu\Foundation\Currency\Services\CurrencyRegistry;
use Liberu\Foundation\Currency\ValueObjects\Money;

it('keeps monetary amounts precise in minor units', function () {
    $registry = app(CurrencyRegistry::class);
    $usd = $registry->get('USD');

    expect((new Money(12345, $usd))->decimal())->toBe('123.45')
        ->and((new Money(-5, $usd))->decimal())->toBe('-0.05')
        ->and((new Money(100, $usd))->add(new Money(25, $usd))->minorAmount)->toBe(125);
});

it('rejects arithmetic across currencies', function () {
    $registry = app(CurrencyRegistry::class);

    expect(fn () => (new Money(100, $registry->get('USD')))->add(new Money(100, $registry->get('EUR'))))
        ->toThrow(CurrencyMismatch::class);
});

it('uses the fallback exchange-rate endpoint when the primary one fails', function () {
    config([
        'currency.exchange_rates_enabled' => true,
        'currency.exchange_rate_api_url' => 'https://primary.test/latest/{base}',
        'currency.exchange_rate_api_fallback_url' => 'https://fallback.test/latest/{base}',
    ]);
    Http::fake([
        'primary.test/*' => Http::response(['result' => 'error'], 503),
        'fallback.test/*' => Http::response(['result' => 'success', 'time_last_update_unix' => 1761782400, 'rates' => ['EUR' => 0.9]]),
    ]);

    $registry = app(CurrencyRegistry::class);
    $rate = app(OpenExchangeRateApiProvider::class)->rate($registry->get('USD'), $registry->get('EUR'), new DateTimeImmutable());

    expect($rate)->not->toBeNull()
        ->and($rate->rate)->toBe('0.9')
        ->and($rate->source)->toBe('fallback.test');
});
