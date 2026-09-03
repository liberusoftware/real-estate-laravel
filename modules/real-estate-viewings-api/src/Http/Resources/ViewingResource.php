<?php

declare(strict_types=1);

namespace Liberu\RealEstate\ViewingsApi\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class ViewingResource extends JsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return $this->resource->only(['id', 'team_id', 'property_id', 'party_id', 'subject', 'status', 'starts_at', 'ends_at', 'guests_count', 'access', 'accompaniment', 'reminders', 'feedback', 'no_show', 'created_at', 'updated_at']);
    }
}
