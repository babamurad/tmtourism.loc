<?php

namespace App\Filament\Widgets;

use App\Models\TourGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class UpcomingTourGroups extends BaseWidget
{
    protected static ?string $heading = 'Ближайшие группы (30 дней)';

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                TourGroup::query()
                    ->with(['tour'])
                    ->where('starts_at', '>=', now())
                    ->where('starts_at', '<=', now()->addDays(30))
                    ->where('status', 'open')
                    ->orderBy('starts_at')
                    ->limit(10)
            )
            ->columns([
                TextColumn::make('tour.title')
                    ->label('Тур'),

                TextColumn::make('starts_at')
                    ->label('Дата')
                    ->date('d.m.Y'),

                TextColumn::make('price_cents')
                    ->money('tmt', true)
                    ->label('Цена'),

                TextColumn::make('places')
                    ->label('Свободно')
                    ->getStateUsing(fn ($record) => $record->max_people - $record->current_people),
            ]);
    }
}
