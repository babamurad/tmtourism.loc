<?php

namespace App\Filament\Resources\Guides\Schemas;

use Filament\Schemas\Schema;

class GuideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(3),
                \Filament\Forms\Components\TextInput::make('image')
                    ->url()
                    ->maxLength(255),
                \Filament\Forms\Components\TagsInput::make('languages')
                    ->required()
                    ->placeholder('Введите языки (например: ru, en, tm)'),
                \Filament\Forms\Components\TextInput::make('specialization')
                    ->maxLength(255),
                \Filament\Forms\Components\TextInput::make('experience_years')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->default(true),
                \Filament\Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
