<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Leads\Domain\LeadSource;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;

final class CreateLead
{
    /** @param array<string, mixed> $attributes */
    public function handle(int|string $teamId, array $attributes): Lead
    {
        $name = trim((string) ($attributes['name'] ?? ''));
        $email = trim((string) ($attributes['email'] ?? ''));
        if ($name === '') {
            throw ValidationException::withMessages(['name' => 'A name is required.']);
        }
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw ValidationException::withMessages(['email' => 'A valid email is required.']);
        }

        app(ValidateLeadReferences::class)->handle($teamId, $attributes);

        $source = LeadSource::tryFrom((string) ($attributes['source'] ?? LeadSource::Manual->value)) ?? LeadSource::Manual;
        $status = LeadStatus::tryFrom((string) ($attributes['status'] ?? '')) ?? LeadStatus::New;

        return DB::transaction(fn (): Lead => Lead::query()->create([
            'team_id' => $teamId,
            'property_id' => $attributes['property_id'] ?? null,
            'assigned_to' => $attributes['assigned_to'] ?? null,
            'source_contact_message_id' => $attributes['source_contact_message_id'] ?? null,
            'source' => $source,
            'name' => $name,
            'email' => $email,
            'phone' => $attributes['phone'] ?? null,
            'status' => $status,
            'notes' => $attributes['notes'] ?? null,
            'score' => $attributes['score'] ?? null,
            'last_activity_at' => now(),
        ]));
    }
}
