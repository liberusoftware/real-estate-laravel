<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Queries;

use Liberu\RealEstate\Viewings\Models\Viewing;

final class ViewingCalendarExport
{
    public function handle(Viewing|int|string $viewing): string
    {
        $events = $viewing instanceof Viewing ? collect([$viewing]) : Viewing::query()->forTeam($viewing)->get();
        $ics = "BEGIN:VCALENDAR\r\nVERSION:2.0\r\n";
        foreach ($events as $event) {
            $ics .= "BEGIN:VEVENT\r\nUID:viewing-{$event->id}\r\nDTSTART:".$event->starts_at->utc()->format('Ymd\THis\Z')."\r\nSUMMARY:".addcslashes($event->subject, ',;')."\r\nEND:VEVENT\r\n";
        }

        return $ics."END:VCALENDAR\r\n";
    }
}
