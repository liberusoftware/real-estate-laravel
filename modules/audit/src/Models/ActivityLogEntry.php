<?php

declare(strict_types=1);

namespace Liberu\Foundation\Audit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * Read-mostly view of the activity_log table. Rows are appended exclusively
 * by DatabaseAuditRecorder (for the tamper-evident, hash-chained events) or
 * Spatie's own LogsActivity trait (User, Team) — nothing should update or
 * delete a row here, since that would break the hash chain for every
 * subsequent entry.
 *
 * @property int $id
 * @property string|null $log_name
 * @property string $description
 * @property string|null $subject_type
 * @property int|string|null $subject_id
 * @property string|null $event
 * @property string|null $causer_type
 * @property int|string|null $causer_id
 * @property array|null $attribute_changes
 * @property array|null $properties
 * @property string|null $previous_hash
 * @property string|null $record_hash
 * @property string|null $tenant_ref
 * @property string|null $correlation_id
 * @property Carbon|null $retain_until
 */
final class ActivityLogEntry extends Model
{
    public $timestamps = true;

    protected $table = 'activity_log';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'attribute_changes' => 'array',
            'properties' => 'array',
            'retain_until' => 'datetime',
        ];
    }

    public function subject(): MorphTo
    {
        return $this->morphTo();
    }

    public function causer(): MorphTo
    {
        return $this->morphTo();
    }
}
