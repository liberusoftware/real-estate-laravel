<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;

final class UpdateLead
{
    public function __construct(private readonly TransitionLead $transition) {}

    /** @param array<string, mixed> $attributes */
    public function handle(Lead $lead, int|string $teamId, array $attributes): Lead
    {
        if ((string) $lead->team_id !== (string) $teamId) {
            throw ValidationException::withMessages(['lead' => 'The lead does not belong to this team.']);
        }

        if (array_key_exists('name', $attributes) && trim((string) $attributes['name']) === '') {
            throw ValidationException::withMessages(['name' => 'A name is required.']);
        }
        if (array_key_exists('email', $attributes) && ! filter_var($attributes['email'], FILTER_VALIDATE_EMAIL)) {
            throw ValidationException::withMessages(['email' => 'A valid email is required.']);
        }

        $status = null;
        if (array_key_exists('status', $attributes)) {
            $status = LeadStatus::tryFrom((string) $attributes['status']);
            if ($status === null) {
                throw ValidationException::withMessages(['status' => 'Select a valid lead status.']);
            }
            unset($attributes['status']);
        }

        $attributes = array_intersect_key($attributes, array_flip(['name', 'email', 'phone', 'notes', 'source', 'score', 'property_id', 'assigned_to']));
        app(ValidateLeadReferences::class)->handle($teamId, $attributes);
        $lead->fill($attributes)->save();
        $lead = $lead->refresh();

        return $status !== null && $status !== $lead->status
            ? $this->transition->handle($lead, $teamId, $status)
            : $lead;
    }
}
