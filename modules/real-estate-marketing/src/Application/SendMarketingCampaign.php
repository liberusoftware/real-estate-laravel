<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Marketing\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Marketing\Domain\Events\MarketingCampaignDispatched;
use Liberu\RealEstate\Marketing\Domain\MarketingCampaignStatus;
use Liberu\RealEstate\Marketing\Mail\CampaignMail;
use Liberu\RealEstate\Marketing\Models\MarketingCampaign;

/**
 * The only channel this actually sends: 'email', via audience.emails (an
 * explicit recipient list — there is no lead/contact list in the platform
 * yet to resolve an audience from). Every other channel value is content
 * you can describe in the resource but never fire, same as before this
 * action existed — that's an honest limit, not a bug, until a channel
 * adapter for it is built.
 */
final class SendMarketingCampaign
{
    public function handle(MarketingCampaign $campaign): MarketingCampaign
    {
        return DB::transaction(function () use ($campaign): MarketingCampaign {
            $campaign = MarketingCampaign::query()->lockForUpdate()->findOrFail($campaign->getKey());

            if ($campaign->status !== MarketingCampaignStatus::Active) {
                throw ValidationException::withMessages(['status' => 'Only an active campaign can be sent.']);
            }

            if (strtolower((string) $campaign->channel) !== 'email') {
                throw ValidationException::withMessages(['channel' => "Sending is only implemented for the 'email' channel."]);
            }

            $subject = (string) ($campaign->content['subject'] ?? '');
            $body = (string) ($campaign->content['body'] ?? '');
            if ($subject === '' || $body === '') {
                throw ValidationException::withMessages(['content' => "The campaign's content must include a 'subject' and a 'body'."]);
            }

            $emails = array_values(array_unique(array_filter(
                (array) ($campaign->audience['emails'] ?? []),
                static fn (mixed $email): bool => is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false,
            )));
            if ($emails === []) {
                throw ValidationException::withMessages(['audience' => "The campaign's audience must include at least one valid email in 'emails'."]);
            }

            foreach ($emails as $email) {
                Mail::to($email)->queue((new CampaignMail($subject, $body))->afterCommit());
            }

            $campaign->forceFill([
                'status' => MarketingCampaignStatus::Completed,
                'metrics' => [...$campaign->metrics ?? [], 'sent_count' => count($emails), 'sent_at' => now()->toISOString()],
            ])->save();

            Event::dispatch(new MarketingCampaignDispatched($campaign, count($emails)));

            return $campaign->refresh();
        });
    }
}
