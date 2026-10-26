<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertyPriceAlert;

final class PriceAlertMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly PropertyPriceAlert $alert,
        public readonly Property $property,
        public readonly float $percentageChange,
    ) {}

    public function build(): self
    {
        $direction = $this->percentageChange < 0 ? 'dropped' : 'risen';
        $change = number_format(abs($this->percentageChange), 1);
        $address = htmlspecialchars((string) $this->property->address, ENT_QUOTES, 'UTF-8');
        $price = number_format((float) $this->property->price, 0);
        $currency = htmlspecialchars((string) ($this->property->currency ?? ''), ENT_QUOTES, 'UTF-8');

        return $this->subject("Price {$direction} {$change}% — {$address}")
            ->html(
                "<p>The price for <strong>{$address}</strong> has {$direction} by <strong>{$change}%</strong> ".
                "since you set this alert.</p><p>Current price: <strong>{$price} {$currency}</strong></p>",
            );
    }
}
