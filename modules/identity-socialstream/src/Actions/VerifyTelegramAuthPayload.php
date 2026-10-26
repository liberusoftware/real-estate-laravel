<?php

declare(strict_types=1);

namespace Liberu\Foundation\Identity\Socialstream\Actions;

use Illuminate\Http\Request;

/**
 * Telegram's Login Widget has no OAuth handshake — it redirects back with a
 * payload signed using the bot token instead of a state/code exchange. See
 * https://core.telegram.org/widgets/login#checking-authorization for the
 * exact data-check-string/HMAC algorithm this verifies against.
 */
class VerifyTelegramAuthPayload
{
    public function __construct(private readonly string $botToken) {}

    /** @return array<string, mixed>|null null when the payload is missing, stale, or forged. */
    public function verify(Request $request): ?array
    {
        $data = array_filter(
            $request->only(['id', 'first_name', 'last_name', 'username', 'photo_url', 'auth_date', 'hash']),
            fn ($value): bool => $value !== null,
        );

        if (array_filter($data, fn ($value): bool => ! is_scalar($value)) !== []) {
            return null;
        }

        $hash = $data['hash'] ?? null;
        if (! $hash || ! isset($data['id'], $data['auth_date']) || $this->botToken === '') {
            return null;
        }

        unset($data['hash']);
        ksort($data);
        $checkString = collect($data)->map(fn ($value, $key) => "{$key}={$value}")->implode("\n");

        $secretKey = hash('sha256', $this->botToken, true);
        $expectedHash = hash_hmac('sha256', $checkString, $secretKey);

        if (! hash_equals($expectedHash, (string) $hash)) {
            return null;
        }

        // Telegram recommends rejecting stale payloads to prevent replay of a captured redirect.
        if (! ctype_digit((string) $data['auth_date']) || (int) $data['auth_date'] > now()->timestamp + 60 || now()->timestamp - (int) $data['auth_date'] > 86400) {
            return null;
        }

        return $data;
    }
}
