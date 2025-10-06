<?php

namespace App\Filament\Resources\Tours\Schemas;

use Filament\Forms\Components\{RichEditor, Select, TextInput};
use Filament\Forms\Components\{Textarea};
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\FileUpload;

class TourForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tour_category_id')
                    ->relationship('tourCategory', 'title')
                    ->label('Категория тура')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->placeholder('Выберите категорию')
                    ->native(false),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Название тура'),

                RichEditor::make('description')
                    ->label('Описание')
                    ->columnSpanFull(),

                TextInput::make('base_price_cents')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->label('Цена'),

                TextInput::make('duration_days')
                    ->numeric()
                    ->required()
                    ->label('Длительность, дней'),

                FileUpload::make('attachments')
                    ->multiple()
                    ->preserveFilenames()
                    ->disk('public_uploads') // Использование диска public_uploads
                    ->directory('tours')      // storage/app/public/tours
                    ->label('Изображения / Документы')
                    ->dehydrated(false)       // сохраняем вручную
                    ->afterStateHydrated(function (FileUpload $component, $record) {
                        // при редактировании подгружаем уже загруженные файлы
                        if (!$record) return;
                        $files = $record->media->pluck('file_path')->toArray();
                        $component->state($files);
                    }),

                TextInput::make('map_id')
                    ->nullable()
                    ->label('ID карты'),
            ]);
    }
}
