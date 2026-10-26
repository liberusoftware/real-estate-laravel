<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;

final class SavedSearchAlertMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /** @param Collection<int, Property> $properties */
    public function __construct(
        public readonly PropertySavedSearch $savedSearch,
        public readonly Collection $properties,
    ) {}

    public function build(): self
    {
        $count = $this->properties->count();
        $name = htmlspecialchars($this->savedSearch->name, ENT_QUOTES, 'UTF-8');

        $rows = $this->properties->map(function (Property $property): string {
            $address = htmlspecialchars((string) $property->address, ENT_QUOTES, 'UTF-8');
            $price = number_format((float) $property->price, 0);
            $currency = htmlspecialchars((string) ($property->currency ?? ''), ENT_QUOTES, 'UTF-8');

            return "<li><strong>{$address}</strong> — {$price} {$currency}</li>";
        })->implode('');

        return $this->subject("{$count} new ".($count === 1 ? 'match' : 'matches').' for "'.$this->savedSearch->name.'"')
            ->html("<p>New properties matching your saved search <strong>{$name}</strong>:</p><ul>{$rows}</ul>");
    }
}
