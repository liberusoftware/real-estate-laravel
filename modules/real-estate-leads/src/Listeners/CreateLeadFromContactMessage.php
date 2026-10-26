<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Listeners;

use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Leads\Application\CreateLead;
use Liberu\RealEstate\Leads\Domain\LeadSource;
use Liberu\RealEstate\Parties\Domain\Events\ContactMessageReceived;
use Liberu\RealEstate\Properties\Models\Property;

/**
 * real_estate_contact_messages carries no team_id of its own (it's an
 * anonymous public-form submission — see the migration comment). When the
 * message names a property we resolve the team from it; otherwise we fall
 * back to "the" team, the same single-tenant-storefront assumption
 * PublicPropertyController already makes for anonymous public traffic.
 */
final class CreateLeadFromContactMessage
{
    public function handle(ContactMessageReceived $event): void
    {
        $message = $event->message;
        $teamId = $message->property_id !== null
            ? Property::query()->whereKey($message->property_id)->value('team_id')
            : null;
        $teamId ??= Team::query()->oldest()->value('id');

        if ($teamId === null) {
            return;
        }

        app(CreateLead::class)->handle($teamId, [
            'source' => LeadSource::ContactForm->value,
            'source_contact_message_id' => $message->getKey(),
            'name' => $message->name,
            'email' => $message->email,
            'phone' => $message->phone,
            'property_id' => $message->property_id,
            'notes' => $message->message,
        ]);
    }
}
