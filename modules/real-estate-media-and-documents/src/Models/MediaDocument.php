<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Liberu\Foundation\Organizations\Models\Team;

final class MediaDocument extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_media_documents';

    protected $guarded = ['id'];

    public const GALLERY_KINDS = ['photo' => 'photograph', 'floorplan' => 'floor plan', 'siteplan' => 'site plan'];

    protected function casts(): array
    {
        return ['rights' => 'array', 'metadata' => 'array', 'allowed_user_ids' => 'array', 'allowed_roles' => 'array', 'is_signable' => 'boolean', 'retention_until' => 'date'];
    }

    public function versions(): HasMany
    {
        return $this->hasMany(DocumentVersion::class, 'media_document_id')->latest('version');
    }

    public function signatures(): HasMany
    {
        return $this->hasMany(DocumentSignature::class, 'media_document_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(DocumentCategory::class, 'real_estate_document_category_media');
    }

    public function scopeForTeam($query, int|string $teamId)
    {
        return $query->where('team_id', $teamId);
    }

    public function galleryKind(): ?string
    {
        return self::GALLERY_KINDS[$this->kind] ?? null;
    }

    public function isVideo(): bool
    {
        return $this->kind === 'video';
    }

    /**
     * `path` is a plain TextInput in the admin form (staff paste either a
     * full URL or a relative storage path), not a real upload widget — so
     * this has to handle both, in addition to the explicit metadata
     * override. Before this, only the (never-populated) metadata override
     * worked, meaning every real upload silently produced no public URL at
     * all and the storefront gallery fell back to a placeholder image.
     */
    public function publicUrl(): ?string
    {
        $explicit = data_get($this->metadata, 'public_url');
        if ($explicit !== null) {
            return is_string($explicit) && filter_var($explicit, FILTER_VALIDATE_URL) ? $explicit : null;
        }

        $path = (string) ($this->path ?? '');
        if ($path === '') {
            return null;
        }

        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        return Storage::url($path);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
