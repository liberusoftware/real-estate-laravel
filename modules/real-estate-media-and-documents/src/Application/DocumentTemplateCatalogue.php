<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Application;

final class DocumentTemplateCatalogue
{
    /**
     * Return safe demonstration templates that can be copied into a team's library.
     * They are deliberately not seeded automatically because templates are team-owned.
     */
    public function demonstrations(): array
    {
        return config('document-templates.demonstrations', []);
    }

    public function for(string $documentType, ?string $locale = null): array
    {
        return array_values(array_filter(
            $this->demonstrations(),
            static fn (array $template): bool => $template['document_type'] === $documentType
                && ($locale === null || $template['locale'] === $locale),
        ));
    }
}
