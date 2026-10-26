<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesApi\Http\Resources\Concerns;

use Illuminate\Support\Facades\Schema;
use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;
use Liberu\RealEstate\Properties\Models\Property;

/**
 * Both PropertyResource and PublicPropertyResource used to call
 * Property::galleryItems() with no arguments — that method only ever turns
 * ITS OWN argument into gallery items, so every API response's `gallery`
 * was empty (or, at most, a floor-plan fallback) regardless of how many
 * real photos a property actually had. Mirrors
 * PropertyDetail::mediaItems() (real-estate-properties-livewire), the one
 * place this was already done correctly.
 */
trait ResolvesPropertyGallery
{
    public static function collection($resource)
    {
        $properties = method_exists($resource, 'getCollection') ? $resource->getCollection() : collect($resource);

        if ($properties->isNotEmpty() && Schema::hasTable('real_estate_media_documents')) {
            $documents = MediaDocument::query()
                ->whereIn('property_id', $properties->pluck('id'))
                ->whereIn('team_id', $properties->pluck('team_id')->unique())
                ->whereIn('kind', ['photo', 'floorplan', 'siteplan'])
                ->orderBy('sort_order')->orderBy('id')->get()->groupBy('property_id');

            foreach ($properties as $property) {
                $property->setRelation('galleryDocuments', $documents->get($property->id, collect())->where('team_id', $property->team_id)->values());
            }
        }

        return parent::collection($resource);
    }

    /** @return array<int, array{url?: string|null, kind?: string|null, caption?: string|null, staged?: bool}> */
    private function propertyMediaItems(Property $property): array
    {
        if (! $property->relationLoaded('galleryDocuments') && ! Schema::hasTable('real_estate_media_documents')) {
            return [];
        }

        return ($property->relationLoaded('galleryDocuments') ? $property->getRelation('galleryDocuments') : MediaDocument::query()
            ->forTeam($property->team_id)
            ->where('property_id', $property->getKey())
            ->whereIn('kind', ['photo', 'floorplan', 'siteplan'])
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get())
            ->map(fn (MediaDocument $document): array => [
                'url' => $document->publicUrl(),
                'kind' => $document->galleryKind(),
                'caption' => $document->title,
                'staged' => (bool) data_get($document->metadata, 'staged', false),
            ])->all();
    }
}
