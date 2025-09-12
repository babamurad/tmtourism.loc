<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('people_count')
                    ->required()
                    ->numeric(),
                TextInput::make('total_price_cents')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'done' => 'Done',
                                'cancelled' => 'Cancelled',
                            ])
                    ->default('pending')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                DateTimePicker::make('confirmed_at'),
                DateTimePicker::make('cancelled_at'),
            ]);
    }
}
