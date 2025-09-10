<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->minLength(5)
                        ->maxLength(255),
//                        ->rules('required|min:5|max:255'),
                    TextInput::make('slug')
                        ->required()
                        ->minLength(5)
                        ->maxLength(255),
//                        ->rules('required|min:5|max:255'),
                    RichEditor::make('content'),

                ])->columnSpan(2),
                Section::make()->schema([
                    FileUpload::make('image')
                        ->image()
                        ->directory('preview/' . date('Y') . '/' . date('m'))
                ]),
            ])->columns(3);
    }
}
