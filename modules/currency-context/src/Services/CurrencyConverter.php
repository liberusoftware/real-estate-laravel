<?php

namespace Liberu\Foundation\Currency\Services;

use DateTimeImmutable;
use Liberu\Foundation\Currency\Contracts\ExchangeRateProvider;
use Liberu\Foundation\Currency\Exceptions\UnknownCurrency;

/**
 * Thin convenience wrapper for the common case — converting a plain decimal
 * amount (as stored on a domain model, not a Money minor-unit value) between
 * two ISO codes. Returns null on any unresolved rate rather than throwing,
 * so a price display can just omit the converted figure.
 */
final class CurrencyConverter
{
    public function __construct(private CurrencyRegistry $registry, private ExchangeRateProvider $rates) {}

    public function convertAmount(float $amount, string $fromCode, string $toCode): ?float
    {
        if (strtoupper($fromCode) === strtoupper($toCode)) {
            return $amount;
        }

        try {
            $from = $this->registry->get($fromCode);
            $to = $this->registry->get($toCode);
        } catch (UnknownCurrency) {
            return null;
        }

        $rate = $this->rates->rate($from, $to, new DateTimeImmutable());
        if ($rate === null || ! is_numeric($rate->rate) || (float) $rate->rate <= 0) {
            return null;
        }

        $value = $amount * (float) $rate->rate;

        return $rate->inverted ? ($amount / (float) $rate->rate) : $value;
    }
}
