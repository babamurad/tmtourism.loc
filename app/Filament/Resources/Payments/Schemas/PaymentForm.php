<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_id')
                    ->required()
                    ->numeric(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'completed' => 'Completed', 'failed' => 'Failed'])
                    ->default('pending')
                    ->required(),
                TextInput::make('payment_method'),
                TextInput::make('transaction_id'),
                DateTimePicker::make('paid_at'),
            ]);
    }
}
