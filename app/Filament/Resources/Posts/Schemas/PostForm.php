<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(true)
                    ->afterStateUpdated(function (Set $set, ?string $state, string $operation) {
                        if ($operation === 'edit') {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                RichEditor::make('content')
                    ->columnSpanFull(),
                Select::make('category_id')
                    ->required()
                    ->label('Select Category')
                    ->placeholder('Select Category')
                    ->options(Category::query()->pluck('title', 'id'))
                    ->searchable()
                    ->columns(1),
                DatePicker::make('published_at')
                    ->displayFormat('d.m.Y')
                    ->required()
                    ->closeOnDateSelection()
                    ->columns(1),
                Toggle::make('status')
                    ->default(true)
                    ->onIcon(Heroicon::Check)
                    ->offIcon(Heroicon::XMark)
                    ->onColor('success')
                    ->offColor('danger')
                    ->columns(1)
                    ->required(),
                FileUpload::make('image')
                    ->image()->columnSpan(2),
            ]);
    }
}
