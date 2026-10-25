<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Application;

use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;

final class CanAccessMediaDocument
{
    public function handle(MediaDocument $document, int|string $userId, array $roles = [], bool $admin = false): bool
    {
        if ($admin) {
            return true;
        } if ($document->visibility === 'private') {
            return (string) $document->created_by === (string) $userId;
        } if ($document->visibility === 'restricted') {
            return in_array((string) $userId, array_map('strval', $document->allowed_user_ids ?? []), true) || array_intersect($roles, $document->allowed_roles ?? []) !== [];
        }

        return true;
    }
}
