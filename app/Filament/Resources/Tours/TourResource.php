<?php

namespace App\Filament\Resources\Tours;

use App\Filament\Resources\Tours\Pages\CreateTour;
use App\Filament\Resources\Tours\Pages\EditTour;
use App\Filament\Resources\Tours\Pages\ListTours;
use App\Filament\Resources\Tours\Pages\ViewTour;
use App\Filament\Resources\Tours\Schemas\TourForm;
use App\Filament\Resources\Tours\Schemas\TourInfolist;
use App\Filament\Resources\Tours\Tables\ToursTable;
use App\Models\Tour;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Tables\Columns\MapColumn;

class TourResource extends Resource
{
    protected static ?string $model = Tour::class;

    protected static string|null|\UnitEnum $navigationGroup = 'Туры и услуги';
    // protected static string|null|BackedEnum $navigationIcon = 'heroicon-o-globe-alt';
    protected static string|null|BackedEnum $navigationIcon = 'heroicon-o-camera';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel  = 'Туры';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return TourForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TourInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ToursTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\TourGroupsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTours::route('/'),
            'create' => CreateTour::route('/create'),
            'view' => ViewTour::route('/{record}'),
            'edit' => EditTour::route('/{record}/edit'),
        ];
    }
    public static function syncMedia($record, $data): void
    {
        $uploadedFiles = $data['attachments'] ?? [];

        // Удаляем старые медиафайлы, которых нет в новом списке
        $record->media->each(function ($media) use ($uploadedFiles) {
            $filePath = $media->file_path;
            if (!in_array($filePath, $uploadedFiles)) {
                $media->delete();
            }
        });

        // Добавляем новые медиафайлы
        foreach ($uploadedFiles as $filePath) {
            // Проверяем, является ли файл новым (не был загружен ранее)
            if (!$record->media->where('file_path', $filePath)->first()) {
                $fullPath = public_path('uploads/' . $filePath);
                if (file_exists($fullPath)) {
                    \App\Models\Media::create([
                        'model_type' => \App\Models\Tour::class,
                        'model_id' => $record->id,
                        'file_path' => $filePath,
                        'file_name' => basename($filePath),
                        'mime_type' => mime_content_type($fullPath),
                    ]);
                }
            }
        }
    }
}
