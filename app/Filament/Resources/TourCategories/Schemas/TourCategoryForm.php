<?php

namespace App\Filament\Resources\TourCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;

class TourCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($set, $state) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label('URL-адрес')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                RichEditor::make('content')
                    ->label('Содержание')
                    ->columnSpanFull()
                    ->fileAttachmentsDirectory('tour-categories')
                    ->fileAttachmentsVisibility('public'),

                FileUpload::make('image')
                    ->label('Изображение')
                    ->image()
                    ->directory('tour-categories')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('800')
                    ->maxSize(2048),
            ]);
    }
}
