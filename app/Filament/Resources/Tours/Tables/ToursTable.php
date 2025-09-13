<?php

namespace App\Filament\Resources\Tours\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ToursTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->circular()
                    ->label(''),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('tourCategory.title')
                    ->label('Категория')
                    ->sortable(),

                TextColumn::make('base_price_cents')
                    ->money('tmt', true) // тут можно свою валюту
                    ->label('Цена (от)'),

                TextColumn::make('duration_days')
                    ->label('Дней'),
            ])
            ->filters([
                SelectFilter::make('tourCategory')
                    ->relationship('tourCategory', 'title'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
