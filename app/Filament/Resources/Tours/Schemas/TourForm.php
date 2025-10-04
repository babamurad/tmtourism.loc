<?php

namespace App\Filament\Resources\Tours\Schemas;

use Filament\Forms\Components\{RichEditor, Select, TextInput};
use Filament\Forms\Components\{FileUpload, Textarea};
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

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
                    ->label('Цена (тиын)'),

                TextInput::make('duration_days')
                    ->numeric()
                    ->required()
                    ->label('Длительность, дней'),

                Fieldset::make('Изображение')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('tour_images')   // теперь метод есть
                            ->image()
                            ->maxSize(2048)
                            ->label('Главное фото'),
                    ])
                    ->columnSpan(2),

                TextInput::make('map_id')
                    ->nullable()
                    ->label('ID карты'),
            ]);
    }
}
