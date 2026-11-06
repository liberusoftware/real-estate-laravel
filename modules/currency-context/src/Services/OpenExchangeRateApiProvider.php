<?php

namespace Liberu\Foundation\Currency\Services;

use DateTimeImmutable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Liberu\Foundation\Currency\Contracts\ExchangeRateProvider;
use Liberu\Foundation\Currency\ValueObjects\Currency;
use Liberu\Foundation\Currency\ValueObjects\ExchangeRate;

/**
 * Hits the free, no-key endpoint of exchangerate-api.com (one HTTP request
 * per base currency per `currency.stale_after_seconds`, cached — the
 * upstream data itself only refreshes once a day anyway). Returns null
 * rather than throwing on a network failure or an unlisted currency, so a
 * price display can fall back to showing only the source currency.
 */
final class OpenExchangeRateApiProvider implements ExchangeRateProvider
{
    public function rate(Currency $base, Currency $quote, DateTimeImmutable $effectiveAt): ?ExchangeRate
    {
        if (! config('currency.exchange_rates_enabled', false)) {
            return null;
        }

        $rates = $this->rates($base->code);
        if ($rates === null || ! isset($rates['rates'][$quote->code]) || ! is_numeric($rates['rates'][$quote->code]) || (float) $rates['rates'][$quote->code] <= 0) {
            return null;
        }

        return new ExchangeRate(
            base: $base,
            quote: $quote,
            rate: (string) $rates['rates'][$quote->code],
            source: $rates['source'] ?? 'open.er-api.com',
            type: 'market',
            effectiveAt: isset($rates['time_last_update_unix'])
                ? (new DateTimeImmutable())->setTimestamp((int) $rates['time_last_update_unix'])
                : $effectiveAt,
            precision: 6,
        );
    }

    /** @return array{rates: array<string, float>, time_last_update_unix?: int, source?: string}|null */
    private function rates(string $base): ?array
    {
        $ttl = (int) config('currency.stale_after_seconds', 86400);

        $url = str_replace('{base}', $base, (string) config('currency.exchange_rate_api_url'));
        $key = 'currency-context:rates:'.hash('sha256', $url);
        $cached = Cache::get($key);
        if (is_array($cached)) {
            return $cached;
        }

        $rates = $this->fetch($url);

        // Optional second endpoint with the same response shape, tried only
        // when the primary one returns nothing usable.
        $fallback = (string) config('currency.exchange_rate_api_fallback_url', '');
        if ($rates['rates'] === [] && $fallback !== '') {
            $rates = $this->fetch(str_replace('{base}', $base, $fallback));
        }

        Cache::put($key, $rates, $rates['rates'] === [] ? 60 : max(1, $ttl));

        return $rates;
    }

    /** @return array{rates: array<string, float>, time_last_update_unix?: int, source?: string} */
    private function fetch(string $url): array
    {
        try {
            $response = Http::timeout(5)->get($url);

            return $response->successful() && $response->json('result') === 'success'
                ? [
                    'rates' => (array) $response->json('rates'),
                    'time_last_update_unix' => $response->json('time_last_update_unix'),
                    'source' => (string) (parse_url($url, PHP_URL_HOST) ?: 'open.er-api.com'),
                ]
                : ['rates' => []];
        } catch (\Throwable) {
            return ['rates' => []];
        }
    }
}
