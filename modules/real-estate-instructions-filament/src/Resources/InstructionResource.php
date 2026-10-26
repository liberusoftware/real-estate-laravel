<?php

declare(strict_types=1);

namespace Liberu\RealEstate\InstructionsFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Instructions\Application\TransitionInstruction;
use Liberu\RealEstate\Instructions\Domain\InstructionStatus;
use Liberu\RealEstate\Instructions\Models\Instruction;
use Liberu\RealEstate\InstructionsFilament\Resources\InstructionResource\Pages\CreateInstruction;
use Liberu\RealEstate\InstructionsFilament\Resources\InstructionResource\Pages\EditInstruction;
use Liberu\RealEstate\InstructionsFilament\Resources\InstructionResource\Pages\ListInstructions;

final class InstructionResource extends Resource
{
    protected static ?string $model = Instruction::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.instruction.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.instruction.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.instruction.sections.details'))
                ->description(__('filament.instruction.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('subject')->label(__('filament.instruction.fields.subject'))->required()->maxLength(255)->columnSpanFull(),
                    Select::make('status')->label(__('filament.instruction.fields.status'))->options(['draft' => __('filament.instruction.statuses.draft'), 'pending_approval' => __('filament.instruction.statuses.pending_approval'), 'approved' => __('filament.instruction.statuses.approved'), 'withdrawn' => __('filament.instruction.statuses.withdrawn'), 'rejected' => __('filament.instruction.statuses.rejected')])->disabled()->dehydrated(false),
                    DateTimePicker::make('approved_at')->label(__('filament.instruction.fields.approved_at'))->disabled()->dehydrated(false),
                    DateTimePicker::make('withdrawn_at')->label(__('filament.instruction.fields.withdrawn_at'))->disabled()->dehydrated(false),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.instruction.fields.subject'))->searchable(), TextColumn::make('status')->label(__('filament.instruction.fields.status'))->badge(), TextColumn::make('created_at')->label(__('filament.instruction.fields.created_at'))->dateTime()->sortable()])
            ->recordActions([
                EditAction::make(),
                Action::make('submit')
                    ->label('Submit for approval')
                    ->action(fn (Instruction $record): Instruction => app(TransitionInstruction::class)->handle($record, auth()->user()->current_team_id, auth()->id(), InstructionStatus::PendingApproval))
                    ->visible(fn (Instruction $record): bool => $record->status === InstructionStatus::Draft),
                Action::make('approve')
                    ->label('Approve')
                    ->action(fn (Instruction $record): Instruction => app(TransitionInstruction::class)->handle($record, auth()->user()->current_team_id, auth()->id(), InstructionStatus::Approved))
                    ->visible(fn (Instruction $record): bool => $record->status === InstructionStatus::PendingApproval),
                Action::make('reject')
                    ->label('Reject')
                    ->action(fn (Instruction $record): Instruction => app(TransitionInstruction::class)->handle($record, auth()->user()->current_team_id, auth()->id(), InstructionStatus::Rejected))
                    ->visible(fn (Instruction $record): bool => $record->status === InstructionStatus::PendingApproval),
                Action::make('withdraw')
                    ->label('Withdraw')
                    ->action(fn (Instruction $record): Instruction => app(TransitionInstruction::class)->handle($record, auth()->user()->current_team_id, auth()->id(), InstructionStatus::Withdrawn))
                    ->visible(fn (Instruction $record): bool => $record->status === InstructionStatus::Approved),
                DeleteAction::make(),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListInstructions::route('/'), 'create' => CreateInstruction::route('/create'), 'edit' => EditInstruction::route('/{record}/edit')];
    }
}
