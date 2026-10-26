<?php

declare(strict_types=1);

namespace Liberu\Foundation\AuditFilament\Resources;

use Filament\Actions\ViewAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Liberu\Foundation\Audit\Models\ActivityLogEntry;
use Liberu\Foundation\AuditFilament\Resources\ActivityLogResource\Pages\ListActivityLogs;
use Liberu\Foundation\AuditFilament\Resources\ActivityLogResource\Pages\ViewActivityLog;

/**
 * A pure read surface over activity_log — the table is append-only (see
 * ActivityLogEntry's own docblock), so there is deliberately no create,
 * edit, or delete action anywhere on this resource. Rows written by
 * DatabaseAuditRecorder carry a hash chain (previous_hash/record_hash);
 * rows written by Spatie's LogsActivity trait (User, Team) don't and show
 * blank hash columns — both are shown here since they share the one table.
 */
final class ActivityLogResource extends Resource
{
    protected static ?string $model = ActivityLogEntry::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-shield-check';

    public static function getModelLabel(): string
    {
        return __('filament.resources.activity_log.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.activity_log.plural');
    }

    public static function canViewAny(): bool
    {
        return auth()->user()?->can('ViewAny:ActivityLogEntry') ?? false;
    }

    public static function canView(Model $record): bool
    {
        return self::canViewAny();
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when(
            $teamId === null,
            fn (Builder $query): Builder => $query->whereRaw('1 = 0'),
            fn (Builder $query): Builder => $query->where(function (Builder $query) use ($teamId): void {
                $query->where('tenant_ref', (string) $teamId);
                if (auth()->user()?->isSuperAdmin()) {
                    $query->orWhereNull('tenant_ref');
                }
            }),
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')->label(__('filament.audit_log.fields.created_at'))->dateTime()->sortable(),
                TextColumn::make('event')->label(__('filament.audit_log.fields.event'))->badge()->searchable(),
                TextColumn::make('subject_type')->label(__('filament.audit_log.fields.subject'))
                    ->formatStateUsing(fn (ActivityLogEntry $record): string => $record->subject_type !== null
                        ? class_basename($record->subject_type).' #'.$record->subject_id
                        : '—')
                    ->searchable(),
                TextColumn::make('causer.name')->label(__('filament.audit_log.fields.causer'))->default('—'),
                TextColumn::make('record_hash')->label(__('filament.audit_log.fields.record_hash'))
                    ->formatStateUsing(fn (?string $state): string => $state !== null ? substr($state, 0, 12).'…' : '—')
                    ->fontFamily('mono')
                    ->toggleable(),
            ])
            ->filters([
                SelectFilter::make('event')->label(__('filament.audit_log.fields.event'))
                    ->options(fn (): array => self::getEloquentQuery()->whereNotNull('event')->distinct()->orderBy('event')->pluck('event', 'event')->all()),
            ])
            ->recordActions([ViewAction::make()])
            ->defaultSort('created_at', 'desc');
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.audit_log.fields.event'))
                ->columns(2)
                ->schema([
                    TextEntry::make('created_at')->label(__('filament.audit_log.fields.created_at'))->dateTime(),
                    TextEntry::make('event')->label(__('filament.audit_log.fields.event'))->badge(),
                    TextEntry::make('subject_type')->label(__('filament.audit_log.fields.subject'))
                        ->formatStateUsing(fn (ActivityLogEntry $record): string => $record->subject_type !== null
                            ? class_basename($record->subject_type).' #'.$record->subject_id
                            : '—'),
                    TextEntry::make('causer.name')->label(__('filament.audit_log.fields.causer'))->default('—'),
                    TextEntry::make('tenant_ref')->label(__('filament.audit_log.fields.tenant'))->default('—'),
                    TextEntry::make('correlation_id')->label(__('filament.audit_log.fields.correlation_id'))->default('—')->copyable(),
                ]),
            Section::make(__('filament.audit_log.fields.changes'))
                ->schema([
                    // CodeEntry would give syntax highlighting, but that needs
                    // phiki/phiki, which isn't a dependency of this package (or
                    // installed) — pretty-printed JSON in a monospace TextEntry
                    // reads just as well for a before/after diff without pulling
                    // in a new library for one field.
                    TextEntry::make('attribute_changes')->label(null)
                        ->formatStateUsing(fn (?array $state): string => $state !== null ? json_encode($state, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) : '—')
                        ->fontFamily('mono')
                        ->columnSpanFull(),
                ])
                ->visible(fn (ActivityLogEntry $record): bool => filled($record->attribute_changes)),
            Section::make(__('filament.audit_log.fields.hash_chain'))
                ->description(__('filament.audit_log.hash_chain_note'))
                ->columns(2)
                ->schema([
                    TextEntry::make('previous_hash')->label(__('filament.audit_log.fields.previous_hash'))->default('—')->fontFamily('mono')->copyable(),
                    TextEntry::make('record_hash')->label(__('filament.audit_log.fields.record_hash'))->default('—')->fontFamily('mono')->copyable(),
                ])
                ->visible(fn (ActivityLogEntry $record): bool => filled($record->record_hash)),
        ]);
    }

    /** @return array<string, PageRegistration> */
    public static function getPages(): array
    {
        return [
            'index' => ListActivityLogs::route('/'),
            'view' => ViewActivityLog::route('/{record}'),
        ];
    }
}
