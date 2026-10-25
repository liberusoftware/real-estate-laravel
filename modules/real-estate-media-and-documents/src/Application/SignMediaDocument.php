<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Application;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;

final class SignMediaDocument
{
    public function handle(MediaDocument $document, int|string $teamId, int|string $userId, string $data, ?string $ip = null, ?string $agent = null): Model
    {
        if ((string) $document->team_id !== (string) $teamId || ! $document->is_signable) {
            throw ValidationException::withMessages(['document' => 'Document cannot be signed.']);
        }

        return $document->signatures()->create(['team_id' => $teamId, 'user_id' => $userId, 'signature_data' => $data, 'signature_hash' => hash('sha256', $data), 'ip_address' => $ip, 'user_agent' => $agent]);
    }
}
