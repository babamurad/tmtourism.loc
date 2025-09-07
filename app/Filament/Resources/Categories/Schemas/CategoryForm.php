<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
//                    ->default('Test article')
                    ->placeholder('Test article')
                    ->autofocus()
                    ->helperText('Helper text for title')
                    ->label('Наименование'),
                TextInput::make('slug')->disabledOn('create'),
//                TextInput::make('email'),
                RichEditor::make('description')->columnSpan(2),
                DatePicker::make('published_at')->displayFormat('d.m.Y')->native(false)->locale('ru')->format('Y m d')
                ->minDate(now())
                ->closeOnDateSelection(),
                FileUpload::make('image')
                    ->directory('preview/' . date('Y') . '/' . date('m'))
                    ->columnSpan(2)
                    ->imageEditor()
                    ->multiple()
                    ->reorderable()
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp']),
            ]);
    }
}
