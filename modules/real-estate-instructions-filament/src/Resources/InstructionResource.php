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

    protected static ?string $modelLabel = 'Инструкция';

    protected static ?string $pluralModelLabel = 'Инструкции';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('subject')->required()->maxLength(255), Select::make('status')->options(['draft' => 'Draft', 'pending_approval' => 'Pending approval', 'approved' => 'Approved', 'withdrawn' => 'Withdrawn', 'rejected' => 'Rejected'])->disabled()->dehydrated(false), DateTimePicker::make('approved_at')->disabled()->dehydrated(false), DateTimePicker::make('withdrawn_at')->disabled()->dehydrated(false)]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->searchable(), TextColumn::make('status')->badge(), TextColumn::make('created_at')->dateTime()->sortable()])
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
