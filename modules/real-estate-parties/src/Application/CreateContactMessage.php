<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Parties\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Liberu\RealEstate\Parties\Domain\Events\ContactMessageReceived;
use Liberu\RealEstate\Parties\Models\ContactMessage;

final class CreateContactMessage
{
    public function handle(array $attributes): ContactMessage
    {
        $rules = ['name' => ['required', 'string', 'max:255'], 'email' => ['required', 'email:rfc', 'max:255'], 'phone' => ['nullable', 'string', 'max:50'], 'interest' => ['nullable', Rule::in(['buying', 'selling', 'renting', 'letting', 'other'])], 'message' => ['required', 'string', 'max:5000']];
        if (array_key_exists('property_id', $attributes) && filled($attributes['property_id']) && Schema::hasTable('real_estate_properties')) {
            $rules['property_id'] = ['nullable', 'integer', Rule::exists('real_estate_properties', 'id')->whereNull('deleted_at')];
        }
        $validated = Validator::make($attributes, $rules, ['email.email' => 'Add the part after the @ so we can reply.', 'property_id.exists' => 'That property is no longer listed.'])->validate();

        $message = DB::transaction(fn (): ContactMessage => ContactMessage::query()->create($validated));

        // A contact enquiry was, until now, a record nobody automatically
        // acted on — see real-estate-leads' CreateLeadFromContactMessage,
        // which listens for this to turn it into a tracked pipeline lead.
        Event::dispatch(new ContactMessageReceived($message));

        return $message;
    }
}
