<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocumentsFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\MediaAndDocuments\Application\GeneratePropertyBrochure;
use Liberu\RealEstate\MediaAndDocuments\Application\ReorderMediaDocument;
use Liberu\RealEstate\MediaAndDocuments\Application\SetMediaDocumentRetention;
use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;
use Liberu\RealEstate\MediaAndDocumentsFilament\Resources\MediaDocumentResource\Pages\CreateMediaDocument;
use Liberu\RealEstate\MediaAndDocumentsFilament\Resources\MediaDocumentResource\Pages\EditMediaDocument;
use Liberu\RealEstate\MediaAndDocumentsFilament\Resources\MediaDocumentResource\Pages\ListMediaDocuments;

final class MediaDocumentResource extends Resource
{
    protected static ?string $model = MediaDocument::class;

    protected static ?string $modelLabel = 'Медиафайл';

    protected static ?string $pluralModelLabel = 'Медиафайлы';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([Select::make('kind')->options(['photo' => 'Photo', 'floorplan' => 'Floorplan', 'video' => 'Video', 'certificate' => 'Certificate', 'brochure' => 'Brochure', 'document' => 'Document'])->required(), TextInput::make('path')->required()->maxLength(2048), TextInput::make('title')->maxLength(255), TextInput::make('sort_order')->numeric()->minValue(0)]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('kind')->badge(), TextColumn::make('title')->searchable(), TextColumn::make('path')->limit(50), TextColumn::make('sort_order')->sortable(), TextColumn::make('retention_until')->date(), TextColumn::make('created_at')->dateTime()->sortable()])->recordActions([
            EditAction::make(),
            Action::make('brochure')->form([TextInput::make('title')->required(), TextInput::make('price')->numeric()->required(), TextInput::make('address')])->action(fn (MediaDocument $record, array $data): array => app(GeneratePropertyBrochure::class)->handle(['id' => $record->getKey(), 'title' => $data['title'], 'price' => $data['price'], 'address' => $data['address'] ?? '', 'images' => [$record->path]])),
            Action::make('reorder')->form([TextInput::make('sort_order')->numeric()->required()->minValue(0)])->action(fn (MediaDocument $record, array $data): MediaDocument => app(ReorderMediaDocument::class)->handle($record, (int) auth()->user()->current_team_id, (int) $data['sort_order'])),
            Action::make('retention')->form([TextInput::make('retention_until')->type('date')])->action(fn (MediaDocument $record, array $data): MediaDocument => app(SetMediaDocumentRetention::class)->handle($record, (int) auth()->user()->current_team_id, $data['retention_until'] ?? null)),
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
        return ['index' => ListMediaDocuments::route('/'), 'create' => CreateMediaDocument::route('/create'), 'edit' => EditMediaDocument::route('/{record}/edit')];
    }
}
