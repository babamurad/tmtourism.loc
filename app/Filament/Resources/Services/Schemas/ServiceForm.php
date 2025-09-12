<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('type')
                    ->options([
            'flight' => 'Flight',
            'visa' => 'Visa',
            'hotel' => 'Hotel',
            'excursion' => 'Excursion',
            'guide' => 'Guide',
            'transfer' => 'Transfer',
            'insurance' => 'Insurance',
        ])
                    ->required(),
                TextInput::make('default_price_cents')
                    ->required()
                    ->numeric(),
            ]);
    }
}
