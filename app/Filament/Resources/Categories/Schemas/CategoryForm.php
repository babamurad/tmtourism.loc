<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Str;

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
                        ->maxLength(255)
                        ->live(true)
                        ->afterStateUpdated(function (Set $set, ?string $state, string $operation) {
                            if ($operation === 'edit') {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        }),
//                        ->rules('required|min:5|max:255'),
                    TextInput::make('slug')
                        ->required()
                        ->minLength(5)
                        ->unique(ignoreRecord: true)
                        ->helperText('Генерируется автоматически на основе наименования')
                        ->disabled(),

//                        ->rules('required|min:5|max:255'),
                    RichEditor::make('content')->required(),

                ])->columnSpan(2),
                Section::make()->schema([
                    Toggle::make('is_published')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true),
//                    ->label('Опубликовано'),
                    FileUpload::make('image')
                        ->image()
                        ->directory('preview/' . date('Y') . '/' . date('m')),
                ]),
            ])->columns(3);
    }
}
