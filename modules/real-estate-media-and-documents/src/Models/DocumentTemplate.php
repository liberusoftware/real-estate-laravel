<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\MediaAndDocuments\Domain\DocumentTemplateStatus;

final class DocumentTemplate extends Model
{
    protected $table = 'real_estate_document_templates';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'status' => DocumentTemplateStatus::class,
            'variables' => 'array',
            'sections' => 'array',
            'published_at' => 'datetime',
            'archived_at' => 'datetime',
        ];
    }

    public function envelopes(): HasMany
    {
        return $this->hasMany(DocumentEnvelope::class, 'document_template_id');
    }

    public function getCustomFields(): array
    {
        preg_match_all('/\{\{\s*([a-zA-Z0-9_]+)\s*\}\}/', $this->content, $m);

        return array_values(array_unique($m[1] ?? []));
    }

    public function renderContent(array $values): string
    {
        return (string) preg_replace_callback(
            '/\{\{\s*([a-zA-Z0-9_]+)\s*\}\}/',
            fn (array $match): string => e((string) ($values[$match[1]] ?? '')),
            $this->content,
        );
    }

    public function validateValues(array $values): void
    {
        $missing = array_values(array_diff($this->getCustomFields(), array_keys($values)));
        if ($missing !== []) {
            throw ValidationException::withMessages(['values' => 'Missing template values: '.implode(', ', $missing)]);
        }
    }

    public function generateDocument(array $values): string
    {
        return $this->renderContent($values);
    }
}
