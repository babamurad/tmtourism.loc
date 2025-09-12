<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BookingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('people_count')
                    ->numeric(),
                TextEntry::make('total_price_cents')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('confirmed_at')
                    ->dateTime(),
                TextEntry::make('cancelled_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
