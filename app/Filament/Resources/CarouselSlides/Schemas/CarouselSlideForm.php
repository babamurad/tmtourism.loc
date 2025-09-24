<?php

namespace App\Filament\Resources\CarouselSlides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CarouselSlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('description')
                    ->label('Описание')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Изображение')
                    ->image()
                    ->directory('carousel')
                    ->maxSize(4096)
                    ->required(),

                TextInput::make('button_text')
                    ->label('Текст кнопки')
                    ->maxLength(255),

                TextInput::make('button_link')
                    ->label('Ссылка кнопки')
                    ->url()
                    ->maxLength(255),

                TextInput::make('sort_order')
                    ->label('Порядок')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Активен')
                    ->default(true),
            ]);
    }
}
