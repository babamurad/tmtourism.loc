<?php

namespace App\Filament\Resources\Tours\Schemas;

use Filament\Forms\Components\{FileUpload, RichEditor, Select, TextInput};
use Filament\Schemas\Schema;

class TourForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tour_category_id')
                    ->relationship('tourCategory', 'title')
                    ->searchable()
                    ->required(),

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

                FileUpload::make('image')
                    ->image()
                    ->directory('tours')
                    ->maxSize(2048)
                    ->label('Главное фото'),
            ]);
    }
}
