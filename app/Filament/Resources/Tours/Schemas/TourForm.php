<?php

namespace App\Filament\Resources\Tours\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TourForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('description'),
                TextInput::make('base_price_cents')
                    ->required()
                    ->numeric(),
                TextInput::make('duration_days')
                    ->required()
                    ->numeric(),
            ]);
    }
}
