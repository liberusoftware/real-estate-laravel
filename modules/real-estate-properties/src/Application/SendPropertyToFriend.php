<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Application;

use Illuminate\Support\Facades\Mail;
use InvalidArgumentException;
use Liberu\RealEstate\Properties\Mail\PropertyShareMail;
use Liberu\RealEstate\Properties\Models\Property;

final class SendPropertyToFriend
{
    /** @return array{sent: true, property_id: int|string, recipient_email: string} */
    public function handle(
        Property $property,
        string $recipientEmail,
        string $recipientName,
        string $senderName,
        string $senderEmail,
        ?string $personalMessage = null,
    ): array {
        $this->validateEmail($recipientEmail);
        $this->validateEmail($senderEmail);

        $data = $this->buildEmailData($property, $recipientName, $senderName, $senderEmail, $personalMessage);

        Mail::send(new PropertyShareMail($data + [
            'recipient_email' => $recipientEmail,
            'recipient_name' => $recipientName,
        ]));

        return ['sent' => true, 'property_id' => $property->getKey(), 'recipient_email' => $recipientEmail];
    }

    /** @return array<string, mixed> */
    public function buildEmailData(
        Property $property,
        string $recipientName,
        string $senderName,
        string $senderEmail,
        ?string $personalMessage = null,
    ): array {
        $propertyUrl = url('/properties/'.$property->getKey());
        $escapedRecipient = e($recipientName);
        $escapedSender = e($senderName);
        $escapedTitle = e((string) ($property->title ?: $property->address));
        $escapedAddress = e($property->address);
        $escapedMessage = filled($personalMessage) ? e($personalMessage) : '';
        $message = $escapedMessage !== '' ? '<p><em>"'.$escapedMessage.'"</em></p>' : '';

        return [
            'subject' => $senderName.' thought you might be interested in this property',
            'body' => <<<HTML
                <html><body>
                <p>Dear {$escapedRecipient},</p>
                <p>{$escapedSender} has seen a property they think you might be interested in.</p>
                {$message}
                <h2>{$escapedTitle}</h2>
                <p><strong>Location:</strong> {$escapedAddress}</p>
                <p><strong>Price:</strong> {$property->currencySymbol()}{number_format((float) ($property->price ?? 0), 0)}</p>
                <p><strong>Bedrooms:</strong> {$property->bedrooms}</p>
                <p><strong>Bathrooms:</strong> {$property->bathrooms}</p>
                <p><a href="{$propertyUrl}">View full property details</a></p>
                <hr><p><small>This email was sent by {$escapedSender} ({$senderEmail}) using the property sharing feature.</small></p>
                </body></html>
                HTML,
            'property' => $property,
            'property_url' => $propertyUrl,
            'recipient_name' => $recipientName,
            'sender_name' => $senderName,
            'sender_email' => $senderEmail,
            'personal_message' => $personalMessage,
        ];
    }

    private function validateEmail(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException('Invalid email address: '.$email);
        }
    }
}
