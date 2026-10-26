<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Application;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RuntimeException;

final class GeneratePropertyDescription
{
    /** @param array<string, mixed> $property */
    public function handle(array $property, string $tone = 'professional'): string
    {
        $tone = in_array($tone, ['professional', 'casual', 'luxury'], true) ? $tone : 'professional';
        $apiKey = config('services.openai.api_key');
        if (! filled($apiKey)) {
            return $this->fallback($property, $tone);
        }

        $response = Http::withToken((string) $apiKey)
            ->acceptJson()
            ->timeout(20)
            ->post((string) config('services.openai.endpoint', 'https://api.openai.com/v1/chat/completions'), [
                'model' => config('services.openai.model', 'gpt-3.5-turbo'),
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a professional real estate agent writing accurate property descriptions.'],
                    ['role' => 'user', 'content' => $this->prompt($property, $tone)],
                ],
                'max_tokens' => 300,
                'temperature' => 0.7,
            ]);

        $description = $response->json('choices.0.message.content');
        if (! $response->successful() || ! is_string($description) || trim($description) === '') {
            throw new RuntimeException('Failed to generate AI description');
        }

        return trim($description);
    }

    /** @param array<string, mixed> $property */
    private function prompt(array $property, string $tone): string
    {
        $toneInstruction = match ($tone) {
            'casual' => 'Use a casual and friendly tone.',
            'luxury' => 'Use an upscale and sophisticated tone, emphasizing luxury features.',
            default => 'Use a professional and informative tone.',
        };

        return sprintf(
            'Generate an appealing property description for a %s with %s bedrooms, %s bathrooms, %s sqft, located in %s, priced at %s %s. %s',
            $property['property_type'] ?? 'property', $property['bedrooms'] ?? 0, $property['bathrooms'] ?? 0,
            $property['area_sqft'] ?? 0, $property['location'] ?? $property['address'] ?? 'an excellent location',
            $property['price'] ?? 0, $property['currency'] ?? config('app.currency', 'GBP'), $toneInstruction,
        );
    }

    /** @param array<string, mixed> $property */
    private function fallback(array $property, string $tone): string
    {
        $descriptor = match ($tone) {
            'casual' => 'comfortable',
            'luxury' => 'exceptional',
            default => 'well-presented',
        };

        return sprintf('A %s %s in %s with %s bedrooms, %s bathrooms, and %s square feet of space.', $descriptor, Str::lower((string) ($property['property_type'] ?? 'property')), $property['location'] ?? $property['address'] ?? 'an excellent location', $property['bedrooms'] ?? 0, $property['bathrooms'] ?? 0, $property['area_sqft'] ?? 0);
    }
}
