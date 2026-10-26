<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Marketing\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class CampaignMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(
        private readonly string $subjectLine,
        private readonly string $body,
    ) {}

    public function build(): self
    {
        return $this->subject($this->subjectLine)->html($this->body);
    }
}
