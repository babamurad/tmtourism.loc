<?php

namespace App\Filament\Resources\Tours\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TourInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('base_price_cents')
                    ->numeric(),
                TextEntry::make('duration_days')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
