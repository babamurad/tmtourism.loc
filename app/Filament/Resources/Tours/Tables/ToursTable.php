<?php

namespace App\Filament\Resources\Tours\Tables;

use App\Filament\Tables\Columns\MapColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;

class ToursTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->searchable(),
                TextColumn::make('tourCategory.name')->label('Категория'),
                TextColumn::make('base_price_cents')
                    ->money('rub')
                    ->label('Цена, ₽'),
                TextColumn::make('duration_days')->label('Дней'),

                /* ↓ наша новая колонка ↓ */
                MapColumn::make('map')
                    ->label('Карта маршрута')
                    ->width('320px'),
            ])
            ->actions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->defaultSort('id', 'desc')
            ->searchPlaceholder('Search by title')
            ->toolbarActions([
                \Filament\Actions\CreateAction::make(),
            ]);
    }
}