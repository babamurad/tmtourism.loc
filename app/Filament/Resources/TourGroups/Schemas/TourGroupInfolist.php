<?php

namespace App\Filament\Resources\TourGroups\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TourGroupInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('tour.title'),
                TextEntry::make('starts_at')
                    ->dateTime(),
                TextEntry::make('max_people')
                    ->numeric(),
                TextEntry::make('current_people')
                    ->numeric(),
                TextEntry::make('price_cents')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
