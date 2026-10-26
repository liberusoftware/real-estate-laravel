<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Marketing\Application;

use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Marketing\Domain\MarketingCampaignStatus;
use Liberu\RealEstate\Marketing\Models\MarketingCampaign;

/**
 * Scheduled (see routes/console.php): promotes any Scheduled email campaign
 * whose schedule.send_at has passed to Active, then sends every Active
 * email campaign. SendMarketingCampaign moves a campaign to Completed once
 * it's sent, so an Active campaign is always exactly "not sent yet" —
 * running this repeatedly can't double-send.
 */
final class DispatchScheduledCampaigns
{
    public function handle(int|string|null $teamId = null): int
    {
        $due = MarketingCampaign::query()
            ->when($teamId !== null, fn ($query) => $query->where('team_id', $teamId))
            ->where('status', MarketingCampaignStatus::Scheduled)
            ->whereRaw('LOWER(channel) = ?', ['email'])
            ->get()
            ->filter(function (MarketingCampaign $campaign): bool {
                $sendAt = $campaign->schedule['send_at'] ?? null;

                return $sendAt !== null && Carbon::parse($sendAt)->lessThanOrEqualTo(now());
            });

        foreach ($due as $campaign) {
            $campaign->forceFill(['status' => MarketingCampaignStatus::Active])->save();
        }

        $sent = 0;
        $active = MarketingCampaign::query()
            ->when($teamId !== null, fn ($query) => $query->where('team_id', $teamId))
            ->where('status', MarketingCampaignStatus::Active)
            ->whereRaw('LOWER(channel) = ?', ['email'])
            ->get();

        foreach ($active as $campaign) {
            try {
                app(SendMarketingCampaign::class)->handle($campaign);
                $sent++;
            } catch (ValidationException) {
                // Missing subject/body/audience on an otherwise-Active
                // campaign — leave it Active so a staff member can fix the
                // content and it gets picked up next run, rather than
                // silently losing the campaign in a failed state.
                continue;
            }
        }

        return $sent;
    }
}
