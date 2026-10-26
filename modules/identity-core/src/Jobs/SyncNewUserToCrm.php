<?php

declare(strict_types=1);

namespace Liberu\Foundation\Identity\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Pushes a newly registered user into the standalone liberu CRM
 * (crm-laravel) as a lead — opt-in via config('services.crm.*'), no-ops
 * with neither url nor token set so a host that hasn't deployed a CRM
 * instance yet sees no behavior change. Fired from both the plain
 * email/password registration path (AuthTokenController) and
 * Socialstream's NewOAuthRegistration event (Google/Telegram both route
 * through the same OAuth pipeline), so this is the one place the shape
 * of what gets sent is decided.
 */
final class SyncNewUserToCrm implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    public int $tries = 5;

    /**
     * @param  array<string, mixed>  $sourceMetadata
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        private readonly int $userId,
        private readonly string $source,
        private readonly array $sourceMetadata = [],
        private readonly array $payload = [],
    ) {}

    /** @return array<int, int> */
    public function backoff(): array
    {
        return [10, 30, 60, 300, 900];
    }

    public function handle(): void
    {
        $baseUrl = config('services.crm.base_url');
        $token = config('services.crm.token');

        if (! $baseUrl || ! $token) {
            return;
        }

        $userModel = config('auth.providers.users.model');
        $user = $userModel::find($this->userId);

        if (! $user) {
            return;
        }

        Http::baseUrl($baseUrl)
            ->withToken($token)
            ->timeout(5)
            ->post('/api/v1/crm/lead-capture', [
                'external_key' => config('services.crm.external_key_prefix', 'user-').$user->id,
                'channel' => 'api',
                'status' => 'new',
                'name' => $user->name,
                'email' => $user->email,
                'source' => $this->source,
                'source_metadata' => $this->sourceMetadata,
                'payload' => $this->payload,
            ])
            ->throw();
    }

    public function failed(Throwable $exception): void
    {
        Log::error('Failed to sync new user to CRM', [
            'user_id' => $this->userId,
            'source' => $this->source,
            'error' => $exception->getMessage(),
        ]);
    }
}
