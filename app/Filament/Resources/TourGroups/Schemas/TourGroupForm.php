<?php

namespace App\Filament\Resources\TourGroups\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TourGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tour_id')
                    ->relationship('tour', 'title')
                    ->required(),
                DateTimePicker::make('starts_at')
                    ->required(),
                TextInput::make('max_people')
                    ->required()
                    ->numeric(),
                TextInput::make('current_people')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('price_cents')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'open' => 'Open', 'closed' => 'Closed', 'cancelled' => 'Cancelled'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
